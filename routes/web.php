<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/owner/create', [OwnerController::class, 'create'])->name('owner.create');
Route::post('/owner', [OwnerController::class, 'store'])->name('owner.store');

Route::get('/owner/{owner}/edit', [OwnerController::class, 'edit'])->whereNumber('owner')->name('owner.edit');
Route::put('/owner/{owner}', [OwnerController::class, 'update'])->whereNumber('owner')->name('owner.update');


