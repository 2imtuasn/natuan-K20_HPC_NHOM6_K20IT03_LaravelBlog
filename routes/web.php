<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PageController;
use App\Http\Controller\BlogpostController;
use App\Http\Controller\LoginController;
use App\Http\Controller\RegisterController;
use App\Http\Controller\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ComponentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog-post', function () {
    return view('blog-post');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return 'Toi da lam duoc';
})->middleware('validate_token');
//DashBoard + Login + Register + Password
Route::get('/dashboard', [MainController::class, 'dashboard' ]);
Route::get('/login', [MainController::class, 'login' ]);
Route::get('/register', [MainController::class, 'register' ]);
Route::get('/password', [MainController::class, 'password' ]);
//Page-account
Route::get('/account-setting', [AccountController::class,'account_setting']);
Route::get('/account-notifications', [AccountController::class,'account_notifications']);
Route::get('/account-connections', [AccountController::class,'account_connections']);
//icons
Route::get('/icons-boxicons', [ComponentsController::class,'icons_boxicons']);
