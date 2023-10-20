<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //
    public function AnimalDetail(string $id)

    {
        $animal = Animal::findOrFail($id);
        $image = $animal->image->path;
        // dd($image);
        return view('animal.detail', compact('animal', 'image'));
    }
}
