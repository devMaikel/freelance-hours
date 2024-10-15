<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [WelcomeController::class]);
    Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
    Route::get('/projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');
