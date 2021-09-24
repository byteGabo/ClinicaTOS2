<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only('index','edit','update')->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');


Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('statuses', StatusController::class)->names('admin.statuses');

Route::resource('appointments', AppointmentController::class)->names('admin.appointments');

Route::resource('doctors', DoctorController::class)->names('admin.doctors');

Route::get('doctor/pdf', [DoctorController::class,'crearPDF'])->name('admin.doctors.pdf');

Route::resource('patients', PatientController::class)->names('admin.patients');

Route::get('patient/pdf', [PatientController::class,'crearPDF'])->name('admin.patients.pdf');



