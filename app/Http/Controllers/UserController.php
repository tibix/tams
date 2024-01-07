<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'u_name' => ['required', 'min:6', Rule::unique('users','u_name')],
            'f_name' => ['min:3'],
            'l_name' => ['min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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

        return redirect('/')->with('message', 'You have been logged out!');

    }

    // Authenticate user
    public function authenticate(Request $request)
    {
        $login = $request->input('login');
        $user = User::where('email', $login)->orWhere('u_name', $login)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Invalid login credentials']);
        }

        $request->validate([
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(['email' => $user->email, 'password' => $request->password]) ||
            auth()->attempt(['u_name' => $user->u_name, 'password' => $request->password])) {
            auth()->loginUsingId($user->id);
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['password' => 'Invalid login credentials']);
        }
    }
}
