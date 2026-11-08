<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function loginform()
    {
        return view('main.login');
    }

    public function loginProcess(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $users = config('perpustakaan.users');

        foreach ($users as $user) {
            if ($user['email'] == $email && $user['password'] == $password) {
                session(['user' => $user]);

                return redirect()->route('dashboard');
            }
        }

        return redirect()->route('loginform')->with('error', 'Email atau password salah.');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function pengelolaan()
    {
        $buku = config('perpustakaan.buku');
        return view('main.pengelolaan', compact('buku'));
        
    }

    public function profile()
    {
        return view('profile');
    }

    public function logout()
    {
        return redirect('/login');
    }
}

