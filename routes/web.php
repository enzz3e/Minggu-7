<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProfileController;
Route::get('profile', ProfileController::class)->name('profile');

use App\Http\Controllers\EmployeeController;
Route::post('employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
Route::resource('employees', EmployeeController::class);
