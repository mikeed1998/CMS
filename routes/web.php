<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class,'index'])->name('index');

Route::get('/admin/index/', [AdministradorController::class,'index'])->name('index');

