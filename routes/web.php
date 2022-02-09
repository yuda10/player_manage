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

// Route::get('/', function () {
//     return view('user.welcome');
// });

// Route::get('/test', function () {
//     return view('match_informations.index');
// });

Route::get('/games/{league}', [GameController::class, 'gameList'])->name('gameList');

Route::get('/game_members/{game_id}', [GameMemberController::class, 'gameMemberList'])->name('playerList');

Route::post('/match_add',[GameController::class,'matchAdd'])->name('matchAdd');

Route::post('/match_edit',[GameController::class,'matchEdit'])->name('matchEdit');

Route::post('/match_delete',[GameController::class,'matchDelete'])->name('matchDelete');

Route::get('/game_members/img/{member_id}', [GameMemberController::class, 'imgCode'])->name('imgCode');

Route::post('/home_members_add', [GameMemberController::class, 'homeMemberAdd'])->name('homeMemberAdd');

Route::post('/away_members_add', [GameMemberController::class, 'awayMemberAdd'])->name('awayMemberAdd');

Route::get('/test', function () {
    return view('game_members.test');
});


// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth:users'])->name('dashboard');

// require __DIR__.'/auth.php';
