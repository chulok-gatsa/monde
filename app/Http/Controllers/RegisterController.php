<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{

    public function save(Request $request){
        if (Auth::check()) {
            return redirect(route('index'));
        }

        $validateFields = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'nullable', // Если поле необязательное
            'login' => 'required|unique:user_tbl',
            'email' => 'required|email|unique:user_tbl',
            'password' => 'required|confirmed',
        ]);

        // Создаем нового пользователя
        $user = User::create($validateFields);

        if ($user) {
            Auth()->login($user);
            return redirect(route('index'));
        }

        Session::flash('formError', 'Произошла ошибка при сохранении пользователя');
        return redirect(route('index'));
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Выход текущего пользователя
        $request->session()->invalidate(); // Очистка текущей сессии
        $request->session()->regenerateToken(); // Генерация нового токена сессии

        return redirect('index'); // Перенаправление на главную страницу или куда угодно после выхода
    }
}
