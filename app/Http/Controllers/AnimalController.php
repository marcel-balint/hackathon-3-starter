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
        $image = null;
        if ($animal->image) {
            $image = $animal->image->path;
        }
        return view('animal.detail', compact('animal', 'image'));
    }
    public function create()
    {
        // Prepare empty object
        $animal = new Animal();
        return view('animal.form', compact('animal'));
    }
    public function store(Request $request)
    {
        $this->validateInput($request);
        $animal = new Animal();
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->save();
        session()->flash('success_message', 'Successfully Updated!');
        return redirect()->route('animal.detail', $animal->id);
    }

    // Validation
    private function validateInput($request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'species' => 'required',
                'breed' => 'required',
                'age' => 'required|numeric',
                'weight' => 'required|numeric'
            ]
        );
    }
}
