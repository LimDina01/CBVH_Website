<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\AppointmentController;

Route::get('/', [JewelryController::class, 'showcase'])->name('showcase');
Route::get('/about', [JewelryController::class, 'about'])->name('about');
Route::get('/piece/{slug}', [JewelryController::class, 'piece'])->name('piece.show');
Route::get('/collections', [JewelryController::class, 'collections'])->name('collections');
Route::get('/gemology', [JewelryController::class, 'gemology'])->name('gemology');
Route::get('/atelier', [JewelryController::class, 'atelier'])->name('atelier');

Route::post('/api/inquire', [AppointmentController::class, 'inquire'])->name('api.inquire');
