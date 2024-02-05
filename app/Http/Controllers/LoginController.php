<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function login(Request $request){
        if (Auth::check()) {
            return redirect(route('index'));
        }
    $formFields = $request->only(['login','password']);
    if(Auth::attempt($formFields)){
        return redirect()->intended(route('index'));
    }
    return redirect(route('login'))->withErrors(['login'=>'Не удалось авторизоваться']);
    }
}
