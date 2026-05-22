<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('employee/dashboard', function () {
    return view('Employee.dashboard');
})->middleware(['auth:employee', 'verified'])->name('employee.dashboard');