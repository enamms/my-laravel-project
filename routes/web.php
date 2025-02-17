<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-form', function () {
    return view('user_form');
});

Route::get('/hello', function (){
    return 'Hello Laravel';
})->name('greeting');

Route::get('/show-greeting', [WelcomeController::class, 'showGreeting']);
Route::get('/redirect-greeting', [WelcomeController::class, 'redirectGreeting']);

Route::get('/user/{name?}', function ($name = null) {
    if($name)
    {
        return 'Your name is ' . $name;
    } else {
        return 'No name provided';
    }
});

Route::post('/submit-form', [UserController::class, 'submitform']);

Route::put('/update-user(id)', [UserController::class, 'updateUser']);

Route::patch('/modify-user(id)', [UserController::class, 'modifyUser']);

Route::delete('/delete-user(id)', [UserController::class, 'deleteUser']);