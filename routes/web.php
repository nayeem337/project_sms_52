<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;


Route::get('/',[FrontController::class,'home'])->name('home');
Route::as('front.')->group(function (){

    Route::get('/course-details',[FrontController::class,'courseDetails'])->name('course.details');

});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
