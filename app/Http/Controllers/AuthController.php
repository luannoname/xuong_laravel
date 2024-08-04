<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Đăng nhập
    public function showFormLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $user = $request->only('email', 'password');

        if (Auth::attempt($user)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Thông tin người dùng không đúng'
        ]);
    }
    
    // // Đăng ký
    public function showFormRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::query()->create($data);

        Auth::login($user);

        return redirect()->intended('admin/dashboard');
    }
    
    // Đăng xuất
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
