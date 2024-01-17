<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

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

	public function forgot_password_view()
	{
		return view('auth.forgot-password');
	}

	public function forgot_password(Request $request)
	{
		$request->validate(['email' => 'required|email']);

		$status = Password::sendResetLink(
			$request->only('email')
		);

    	return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
	}

	public function reset_password(Request $request)
	{
		$request->validate([
			'token' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:5|confirmed',
		]);

		$status = Password::reset(
			$request->only('email', 'password', 'password_confirmation', 'token'),
			function (User $user, string $password) {
				$user->forceFill([
					'password' => Hash::make($password)
				])->setRememberToken(Str::random(60));

				$user->save();

				event(new PasswordReset($user));
			}
		);

		return $status === Password::PASSWORD_RESET
					? redirect()->route('login')->with('status', __($status))
					: back()->withErrors(['email' => [__($status)]]);
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
