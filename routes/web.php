<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::view('/index', 'index')->name('index');

// Route::name('user.')->group(function(){



// ->middleware('auth')->name('welcome'); //cтраница пользователя

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect(route('welcome')); //проверка авторизован ли пользователь
    }
    return view('login');
})->name('login'); //страница автоирзации

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::get('/registration', function () {
    if (Auth::check()) {
        return redirect(route('welcome'))->name('welcome'); //проверка авторизован ли пользователь
    }
    return view('registration');
})->name('registration');

Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);

// });

//---------------------------------------------------



// Route::group(['namespace' => 'layouts'],function(){
//     Route::get('/admin', [\App\Http\Controllers\MainController::class,'admin'])->name('admin');
//     Route::get('/main', [\App\Http\Controllers\MainController::class,'main'])->name('index');;
// });

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
        Route::get('/posts/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/posts/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/posts/{post}', 'DestroyController')->name('admin.post.delete');
        Route::get('/posts/create', 'CreateController')->name('admin.post.create');
        Route::get('/posts/{post}', 'ShowController')->name('admin.post.show');
    });
});
//------------------------------------------


Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/search', 'IndexController')->name('search.index');

    // Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    // Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    // Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    // Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});

Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/location', 'LocationController@index')->name('location.index');

Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/wheretofind', 'WheretofindController@index')->name('wheretofind.index');
Route::get('/main', 'MainController@index')->name('main.index');
