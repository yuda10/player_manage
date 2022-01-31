<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GameMemberController;
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

Route::get('/test', function () {
    return view('match_informations.index');
});

Route::get('/games/{league}', [GameController::class, 'gameList'])->name('gameList');

Route::get('/game_members/{game}', [GameMemberController::class, 'playerList'])->name('playerList');

Route::post('/match_register',[GameController::class,'matchRegister'])->name('matchRegister');


Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

require __DIR__.'/auth.php';
