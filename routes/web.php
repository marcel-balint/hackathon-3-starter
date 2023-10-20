<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EditAnimalController;
use Faker\Guesser\Name;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animal/detail/{animal_id}', [AnimalController::class, 'animalDetail'])->name('animal.detail');
// Edit
Route::get('/animal/edit/{animal_id}', [EditAnimalController::class, 'animalEdit'])->name('animal.edit');
// Update
Route::put('/animal/{animal}', [EditAnimalController::class, 'updateAnimal'])->whereNumber('animal')->name('animal.update');
