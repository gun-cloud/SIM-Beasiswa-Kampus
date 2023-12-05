<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     if (auth()->attempt(request(['email', 'password']))) {
    //         return redirect()->route('admin.index');
    //     }

    //     return redirect()->back()->with('error', 'Email atau Password salah');
    // }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Check the user's email to determine the role and redirect accordingly
            $user = auth()->user();

            if ($user->email == 'admin@beasiswa.polmed.ac.id') {
                return redirect()->route('admin.index');
            } elseif ($user->email == 'wadir3@beasiswa.polmed.ac.id') {
                return redirect()->route('wadir3.index');
            } else {
                // Add more conditions for other user roles if needed
                // For example, you can have elseif conditions for other roles
                // and redirect them to their respective routes
            }
        }

        return redirect()->back()->with('error', 'Email atau Password salah');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
