<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class,'index'])->name('home');

Route::get('/jobs', [JobsController::class,'index']);

Route::get('/jobs/{id}', [JobController::class,'index']);

Route::get('/contact', [ContactController::class,'index']); 

 