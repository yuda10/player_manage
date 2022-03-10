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

Route::get('/', function () {
    return view('user.welcome');
});

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

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/players', function () {
    return view('players');
});

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
// Route::get('/foo', [ CreateController::class, 'notice']);

// Route::get('/teams/', [ TeamsController::class, 'index' ] ) ;

Route::get('/home2', function() {
    return view('home');
});

Route::get('/home', [ HomeController::class, 'index'])->name('home');

Route::get('/test', function () {
    return view('games.test');
});


// // 全ユーザ
// Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
// // ユーザ一覧
// Route::get('/account', 'AccountController@index')->name('account.index');
// });
// // 管理者以上
// Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
// // ユーザ登録
// Route::get('/account/regist', 'AccountController@regist')->name('account.regist');
// Route::post('/account/regist', 'AccountController@createData')->name('account.regist');
// // ユーザ編集
// Route::get('/account/edit/{user_id}', 'AccountController@edit')->name('account.edit');
// Route::post('/account/edit/{user_id}', 'AccountController@updateData')->name('account.edit');
// // ユーザ削除
// Route::post('/account/delete/{user_id}', 'AccountController@deleteData');
// });
// // システム管理者のみ
// Route::group(['middleware' => ['auth', 'can:system-only']], function () {
// });
Auth::routes();


