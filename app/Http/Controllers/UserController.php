<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create(){
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'u_name' => ['required', 'min:4', Rule::unique('users','u_name')],
            'f_name' => ['min:4'],
            'l_name' => ['min:4'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:5'
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['role_id'] = 1;
        $user = User::create($formFields);

        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('users.profile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formFields = $request->validate(
			[
				'u_name' => ['required', 'min:4', Rule::unique('users','u_name')->ignore($id)],
				'f_name' => ['min:4'],
				'l_name' => ['min:4'],
				'email' => ['required', 'email', Rule::unique('users','email')->ignore($id)]
			]
			);

		$user = User::find($id);
		$user->update($formFields);

		return redirect('/')->with('success', 'User updated!');
    }

	public function password_reset_form()
	{
		return view('users.password-reset');
	}

	public function password_reset(Request $request, int $user)
	{
		dd($request);
		$formField = $request->validate([
			'current_password' => ['required', 'min:5'],
			'new_password' => ['required', 'min:5'],
			'new_password_confirmation' => ['required', 'min:5'],
		]);

		$user = User::find($user);
		if(Hash::check($formField['current_password'], $user->password))
		{
			if($formField['new_password'] != $formField['new_password_confirmation'])
			{
				return back()->withErrors(['new_password' => 'Passwords do not match'])->onlyInput('new_password');
			} else {
				$user->password = Hash::make($formField['new_password']);
				$user->save();
				return redirect('/')->with('success', 'Password updated!');
			}
		}
		else
		{
			return back()->withErrors(['current_password' => 'Invalid password'])->onlyInput('current_password');
		}
	}

	public function password_recover(Request $request, User $user)
	{
		$formField = $request->validate([
			'password' => 'required',
		]);
	}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Show login form
    public function login(){
        return view('users.login');
    }

    public function home()
    {
        return view('users.home');
    }

    //Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('warning', 'You have been logged out!');

    }

    // Authenticate user
    public function authenticate(Request $request)
    {
        $login = $request->input('login');
        $user = User::where('email', $login)->orWhere('u_name', $login)->first();

        $request->validate([
            'password' => 'required|min:5',
        ]);

        if (auth()->attempt(['email' => $user->email, 'password' => $request->password]) ||
            auth()->attempt(['u_name' => $user->u_name, 'password' => $request->password])) {
            auth()->loginUsingId($user->id);
            return redirect('/')->with('success', 'You have been logged in!');
        } else {
            return back()->withErrors(['login' => 'Invalid login credentials'])->onlyInput('login');
        }
    }
}
