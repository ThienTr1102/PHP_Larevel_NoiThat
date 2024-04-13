<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {

    }
    public function register()
    {
        return view('account.register');

    }
    public function registers(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Tạo user mới
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Đăng nhập user sau khi đăng ký (tuỳ chọn)

        // Redirect sau khi đăng ký thành công
        return redirect('/')->with('success', 'Đăng ký thành công!');
    }

}
