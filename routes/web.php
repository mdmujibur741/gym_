<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\admin\{AboutController,ContactController,DashboardController,EmailNotificationController, FooterController, HomeController,LeadController,ReminderUniqueController,ReminderController,ProvideController,PackageController};



// Frontend Route
Route::get('/', [FrontendController::class, 'index'])->name('web.home');
Route::get('/about', [FrontendController::class, 'about'])->name('web.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('web.contact');
Route::post('/store', [FrontendController::class,'store'])->name('web.contact.store');

// Admin Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->prefix('admin/')->name('admin.')->group(function () {

    Route::resource('lead', LeadController::class);
    Route::resource('reminder', ReminderController::class);
    Route::resource('package', PackageController::class);
    Route::resource('home', HomeController::class);
    Route::resource('provide', ProvideController::class);
    Route::resource('about',AboutController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('footer', FooterController::class);

    //    Specific Lead Reminder Add
    Route::get('reminder/unique/{id}', [ReminderUniqueController::class, 'create'])->name('reminder.unique');
    Route::post('reminder/unique/store', [ReminderUniqueController::class, 'store'])->name('reminder.unique.store');

    //     Email send 
    Route::get('send/email', [EmailNotificationController::class, 'send'])->name('send.mail');

    //     Auth User Route 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
