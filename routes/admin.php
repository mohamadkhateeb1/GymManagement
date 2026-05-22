<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('admin/dashboard', function () {
    return view('Admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard');