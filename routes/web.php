<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\AdminAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AdminController::class,'index'])->name('admin.login');
Route::get('admin/register', [AdminController::class,'register'])->name('admin.register');
Route::post('admin/table', [AdminController::class,'authenticate'])->name('admin.authenticate');


Route::get('admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');






// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::get('/games', [GameController::class, 'index'])->name('admin.games.index');
//     Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
//     Route::get('/form', [AdminController::class,'form'])->name('admin.form');
//     Route::get('/table', [AdminController::class,'table'])->name('admin.table');
// });


// Protected Admin Routes (Requires Authentication)
Route::prefix('admin')->middleware(AdminAuth::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/games', [GameController::class, 'index'])->name('admin.games.index');  // Show all games
    Route::get('/games/create', [GameController::class, 'create'])->name('admin.games.create'); // Show form
    Route::post('/games', [GameController::class, 'store'])->name('admin.games.store'); // Store new game
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('admin.contacts.edit');
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('admin.contacts.create');
    Route::post('/admin/contacts/store', [ContactController::class, 'store'])->name('admin.contacts.store');     
    Route::get('/form', [AdminController::class, 'form'])->name('admin.form');
    Route::get('/table', [AdminController::class, 'table'])->name('admin.table');

    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});





// https://www.youtube.com/watch?v=jR05OHhAKKk&list=PL9Y-SIgpdU4O7-LhPNSK6ZHLwQhqBM46-&index=3  17:30 