<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GameMemberController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/games/{league}', [GameController::class, 'gameList'])->name('gameList');

Route::get('/game_members/{game_id}', [GameMemberController::class, 'gameMemberList'])->name('playerList');

Route::post('/match_add',[GameController::class,'matchAdd'])->name('matchAdd');

Route::post('/match_edit',[GameController::class,'matchEdit'])->name('matchEdit');

Route::post('/match_delete',[GameController::class,'matchDelete'])->name('matchDelete');

Route::get('/game_members/img/{member_id}', [GameMemberController::class, 'imgCode'])->name('imgCode');

Route::post('/home_members_add', [GameMemberController::class, 'homeMemberAdd'])->name('homeMemberAdd');

Route::post('/away_members_add', [GameMemberController::class, 'awayMemberAdd'])->name('awayMemberAdd');

Route::get('/system_admin', [UserController::class, 'userList']);

Route::post('/system_admin/user_edit',[UserController::class,'userEdit'])->name('userEdit');

Route::post('/system_admin/notification', [UserController::class, 'notificationEdit'])->name('notive');

require __DIR__.'/auth.php';

Route::get('/', [NotificationController::class, 'notificationList']);

Route::get('/teams', [ TeamsController::class, 'index' ] ) ;

Route::get('/teamcreate', [ TeamsController::class, 'create' ] )->name('teamcreate');

Route::post('/teams', [ TeamsController::class, 'store'] );

Route::get('/players/{team}', [ PlayersController::class, 'index' ] ) ;

Route::post('/player', [ CreateController::class, 'store'] )->name('player');

Route::get('/create', [ CreateController::class, 'index' ] );

Route::get('/edit/{id}', [ CreateController::class, 'edit' ] )->name('player');;

Route::post('/edit/{id}', [ CreateController::class, 'update'] )->name('player');

Route::get('/edit/profile_delete/{id}', [ CreateController::class, 'profile_delete'] )->name('player');

Auth::routes();


