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

    $user = App\Models\User::findOrFail(25);
    auth()->login($user);
    if(auth()->check()) {
        return redirect()->route('home');
    }

    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/my/rooms', [\App\Http\Controllers\ChatController::class, 'getMyRooms']);

