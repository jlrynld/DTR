<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignInController;

Route::get('' , [SignInController::class, 'index']);

Route::middleware('guest')->group(function(){
    Route::get('/sign-up-index', [SignUpController::class, 'index'])->name('sign-up.index');
    Route::post('/sign-up', [SignUpController::class, 'signUp'])->name('sign-up');

    Route::get('/sign-in-index', [SignInController::class, 'index'])->name('sign-in.index');
    Route::post('/sign-in', [SignInController::class, 'signIn'])->name('sign-in');
});


?>