<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PojectsController;

Route::get('/', [PojectsController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [PojectsController::class, 'show'])->name('projects.show');


