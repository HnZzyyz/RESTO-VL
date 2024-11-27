<?php

namespace App\Http\Controllers;

use App\Models\UserBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('Auth.login');
    }
    
    public function CekLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $token = $request->only('username','password');
        $role = UserBaru::all();
        if(Auth::guard('admin')->attempt($token)) {
                return redirect('/')->with('message','Anda Berhasil Sign In');
        } else {
            return back()->with('notif','Username atau Password Tidak Terdaftar');
        }
    }

    public function dashboard() {
        return view('Page.dashboard');
    }
    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('login')->with('message', 'Anda Berhasil Sign Out');
    }
}
