<?php

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

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/teams/', [ App\Http\Controllers\TeamsController::class, 'index' ] ) ;
Route::get('/players/{team}', [ App\Http\Controllers\PlayersController::class, 'index' ] ) ;
Route::post('/player', [ App\Http\Controllers\CreateController::class, 'store'] )->name('player');
Route::get('/create/', [ App\Http\Controllers\CreateController::class, 'index' ] );
Route::get('/edit/{id}', [ App\Http\Controllers\CreateController::class, 'edit' ] )->name('player');;
Route::post('/edit/{id}', [ App\Http\Controllers\CreateController::class, 'update'] )->name('player');