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
    return view('welcome');
});

Route::get('/check', function () {
    if(DB::connection()->getPdo()){
        return sprintf('%s@%s', 'Successfully Connected to '.DB::connection()->getDatabaseName(), config('app.version'));
    }else{
        return sprintf('%s@%s', 'no hay conexion a la BD', config('app.version'));
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/api/conversations', [App\Http\Controllers\ConversationController::class, 'index']);
Route::get('/api/messages', [App\Http\Controllers\MessagesController::class, 'index']);