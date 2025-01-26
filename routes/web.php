<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Route::controller(Jobscontroller::class)->group(function (){
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs',  'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}',  'update');
//     Route::delete('/jobs/{job}','destroy');
// });

Route::resource('jobs', JobsController::class);

Route::view('/contact', 'contact');

 