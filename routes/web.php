<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowTweets
};
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

Route::get('tweets', ShowTweets::class);

// Route::resource('customers', 'CustomerController');
// Route::post('register', 'CustomerController@index')->name('register');
// Route::post('login', 'CustomerController@index')->name('login');
