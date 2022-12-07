<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EmailNotificationController;
use App\Http\Controllers\admin\LeadController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\ReminderController;
use App\Http\Controllers\admin\ReminderUniqueController;
use Database\Factories\ReminderFactory;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin/')->name('admin.')->group(function () {

                // Auth User Route 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('lead', LeadController::class);
    Route::resource('reminder', ReminderController::class);
    Route::resource('package', PackageController::class);

     //    Specific Lead Reminder Add
    Route::get('reminder/unique/{id}',[ReminderUniqueController::class,'create'])->name('reminder.unique');
    Route::post('reminder/unique/store',[ReminderUniqueController::class,'store'])->name('reminder.unique.store');

    // Email send 
    Route::get('send/email',[EmailNotificationController::class,'send'])->name('send.mail');
});

require __DIR__.'/auth.php';
