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

Route::get('/players', function () {
    return view('players');
});

Route::get('/teams/', [ App\Http\Controllers\TeamsController::class, 'index' ] ) ;
Route::get('/teamcreate/', [ App\Http\Controllers\TeamsController::class, 'create' ] )->name('teamcreate');
Route::post('/teams/', [ App\Http\Controllers\TeamsController::class, 'store'] );

Route::get('/players/{team}', [ App\Http\Controllers\PlayersController::class, 'index' ] ) ;
Route::post('/player', [ App\Http\Controllers\CreateController::class, 'store'] )->name('player');
Route::get('/create/', [ App\Http\Controllers\CreateController::class, 'index' ] );
Route::get('/edit/{id}', [ App\Http\Controllers\CreateController::class, 'edit' ] )->name('player');;
Route::post('/edit/{id}', [ App\Http\Controllers\CreateController::class, 'update'] )->name('player');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// 全ユーザ
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
// ユーザ一覧
Route::get('/account', 'AccountController@index')->name('account.index');
});
// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
// ユーザ登録
Route::get('/account/regist', 'AccountController@regist')->name('account.regist');
Route::post('/account/regist', 'AccountController@createData')->name('account.regist');
// ユーザ編集
Route::get('/account/edit/{user_id}', 'AccountController@edit')->name('account.edit');
Route::post('/account/edit/{user_id}', 'AccountController@updateData')->name('account.edit');
// ユーザ削除
Route::post('/account/delete/{user_id}', 'AccountController@deleteData');
});
// システム管理者のみ
Route::group(['middleware' => ['auth', 'can:system-only']], function () {
});