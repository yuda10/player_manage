<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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
    return view('user.welcome');
});

Route::get('/games', [App\Http\Controllers\GameController::class, 'gamelist']);

// TODOコントローラー作成後に変更(view確認用)
Route::get('/home',function(){
    return view('home');
});

// TODOコントローラー作成後に変更(view確認用)
Route::get('/gamemember',function(){
    return view('gamemember');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

require __DIR__.'/auth.php';
