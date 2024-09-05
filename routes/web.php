<?php
use App\Http\Middleware\UserAccessDashboardMiddleware;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', UserAccessDashboardMiddleware::class]], function () {
        Route::resource('post', PostController::class);
        Route::resource('category', CategoryController::class);

        Route::get('', function () {
            return view('dashboard');
        })->middleware(['auth'])->name('dashboard');
    });
});

require __DIR__.'/auth.php';
