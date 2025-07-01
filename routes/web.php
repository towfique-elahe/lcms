<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all
| are assigned to the "web" middleware group.
|--------------------------------------------------------------------------
*/

// -----------------------------
// ✅ Public Frontend Routes
// -----------------------------

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'post'])->name('post');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/{slug}', [FrontendController::class, 'page'])
    ->where('slug', '^(?!admin|login|logout|register|password|dashboard|profile|blog|services|api|page).*')
    ->name('page');

// Optional clean aliases for about and contact
Route::redirect('/about', '/page/about')->name('about');
Route::redirect('/contact', '/page/contact')->name('contact');


// -----------------------------
// 🔐 Authenticated User Routes
// -----------------------------

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// -----------------------------
// 🔒 Admin Routes
// -----------------------------

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('pages', AdminPageController::class);
    Route::resource('posts', AdminPostController::class);
    Route::resource('services', AdminServiceController::class);
});


// -----------------------------
// 🧾 Auth Routes (Breeze)
// -----------------------------

require __DIR__.'/auth.php';