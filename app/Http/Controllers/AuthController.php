<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
//        TODO Изменить, передать готовый массив в контроллер
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required'],
        ]);

        if(auth('web')->attempt($data)){
            return redirect(route('home'));
        }

            return redirect(route('login'))->withErrors(['email' => 'Пользователь не найден, либо данные введены неправильно'])->withInput();
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
//        TODO Изменить, передать готовый массив в контроллер
        $data = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'string', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8', 'max:50'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if($user){
            auth('web')->login($user);
        }
        return redirect(route('home'));
    }
}
