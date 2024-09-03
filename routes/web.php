<?php

use App\Http\Controllers\AppointedController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\TupadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('/tupad-applicant', TupadController::class);
Route::post('/tupad-applicant/remove', [TupadController::class, 'remove'])->name('tupad-applicant.remove');
Route::get('/tupad/print', [TupadController::class, 'print'])->name('tupad-applicant.print');
Route::resource('/barangay-officials', OfficialController::class);
Route::resource('/appointed-officials', AppointedController::class);
Route::resource('/manage', ManageController::class);
Route::get('/emptyTupad', [ManageController::class, 'emptyTupad'])->name('empty-tupad');
Route::get('/emptyElected', [ManageController::class, 'emptyElected'])->name('empty-elected');
Route::get('/emptyAppointed', [ManageController::class, 'emptyAppointed'])->name('empty-appointed');



