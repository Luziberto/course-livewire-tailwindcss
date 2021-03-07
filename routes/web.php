<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowTweets
};
use App\Http\Livewire\User\UploadPhoto;

Route::get('/', function () {
    return view('welcome');
});

Route::get('upload', UploadPhoto::class)
            ->name('upload.photo.user')
            ->middleware('auth');
Route::get('tweets', ShowTweets::class)
            ->name('tweets.index')
            ->middleware('auth');
// Route::resource('customers', 'CustomerController');
// Route::post('register', 'CustomerController@index')->name('register');
// Route::post('login', 'CustomerController@index')->name('login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
