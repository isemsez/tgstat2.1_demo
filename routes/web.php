<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OneChannel;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [CatalogController::class, 'main_page']);
Route::get('/categ/{id}', [CatalogController::class, 'category_page'])->name('category_page');
Route::get('/regions', [CatalogController::class, 'regions_page']);
Route::get('/regions/{region}', [CatalogController::class, 'one_region_page']);

Route::get('/channel/{id}', [OneChannel::class, 'channel_page']);

Route::get('/search', [CatalogController::class, 'search_page']);

Route::get('/add/channel', [OneChannel::class, 'add_channel']);

Route::get('/ratings/channels', [CatalogController::class, 'ratings_page']);
Route::get('/ratings/channels/{category}', [CatalogController::class, 'ratings_page']);

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
