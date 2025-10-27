<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserDetailController;

Route::get('/', [UserDetailController::class, 'index'])->name('home');
Route::resource('user', UserDetailController::class);



Route::fallback(function () {
    return response()->view('fallback', [], 404);
});
