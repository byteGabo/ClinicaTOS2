<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Models\Doctor;

Route::get('/', [DoctorController::class,'index'])->name('doctors.index');

Route::get('category/{category}', [DoctorController::class,'category'])->name('doctors.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
