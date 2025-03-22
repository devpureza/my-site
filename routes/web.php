<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
