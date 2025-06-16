<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/service/details/{id}', [ServiceController::class, 'frontendShow'])->name('services.show');


Route::get('/', function () {
    $services = Service::all();
    return view('welcome', compact('services'));
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact');
        Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
        Route::get('/edit/{contact_id}', [ContactController::class, 'edit'])->name('contact.edit');
        Route::post('/update/{contact_id}', [ContactController::class, 'edit'])->name('contact.update');
        Route::get('/delete/{contact_id}', [ContactController::class, 'delete'])->name('contact.delete');
    });

    Route::prefix('admin-profile')->group(function () {
        Route::get('/', [AdminProfileController::class, 'index'])->name('admin.profile.index');
        Route::post('/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    });

    Route::prefix('services')->group(function () {
        Route::get('', [ServiceController::class, 'index'])->name('services.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('services.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/edit/{service_id}', [ServiceController::class, 'edit'])->name('services.edit');
        Route::post('/update/{service_id}', [ServiceController::class, 'update'])->name('services.update');
        Route::get('/delete/{service_id}', [ServiceController::class, 'delete'])->name('services.delete');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
