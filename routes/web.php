<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EditAnimalController;
use Faker\Guesser\Name;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/search', [IndexController::class, 'search'])->name('search');

Route::get('searchpet', [IndexController::class, 'searchpet'])->name('searchpet');

// Create owner
Route::get('/animal/create', [AnimalController::class, 'create'])->name('animal.form');
// Store owner
Route::post('/animal', [AnimalController::class, 'store'])->name('animal.store');



Route::get('/animal/detail/{animal_id}', [AnimalController::class, 'animalDetail'])->name('animal.detail');
// Edit animal
Route::get('/animal/edit/{animal_id}', [EditAnimalController::class, 'animalEdit'])->name('animal.edit');
// Update animal
Route::put('/animal/{animal}', [EditAnimalController::class, 'updateAnimal'])->whereNumber('animal')->name('animal.update');

Route::get('/owner/create', [OwnerController::class, 'create'])->name('owner.create');
Route::post('/owner', [OwnerController::class, 'store'])->name('owner.store');

Route::get('/owner/{owner}/edit', [OwnerController::class, 'edit'])->whereNumber('owner')->name('owner.edit');
Route::put('/owner/{owner}', [OwnerController::class, 'update'])->whereNumber('owner')->name('owner.update');
