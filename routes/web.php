<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Foundation\Application;
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about/{id}', [AboutController::class, 'index'])->name('about');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/services', function () {
    return view('site.services');
})->name('services');

Route::get('/blog', function () {
    return view('site.blog');
})->name('blog');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'send'])->name('contacts.send');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', ['ok' => true]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //pets
    Route::get('/my-pets', [PetController::class, 'index'])->name('pet.index');
    Route::get('/my-pets/create', [PetController::class, 'create'])->name('pet.create');
    Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pet.edit');
    Route::post('/pets', [PetController::class, 'store'])->name('pet.store');
    Route::delete('/pets/{id}', [PetController::class, 'destroy'])->name('pet.destroy');
    Route::post('/pets/{id}', [PetController::class, 'update'])->name('pet.update');

    //breed
    Route::get('/breeds', [BreedController::class, 'index'])->name('breed.index');
    
});

require __DIR__.'/auth.php';
