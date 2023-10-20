<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class EditAnimalController extends Controller
{
  public function animalEdit(Request $request, string $id)
  {
    $animal = Animal::findOrFail($id);
    // dd($movie);

    return view('animal.form', compact('animal'));
  }

  public function updateAnimal(Request $request, string $id)
  {
    $animal = Animal::findOrFail($id); // Find the animal first to update it
    $animal->name = $request->input('name');
    $animal->species = $request->input('species');
    $animal->breed = $request->input('breed');
    $animal->age = $request->input('age');
    $animal->weight = $request->input('weight');
    $animal->update();
    session()->flash('success_message', 'Successfully Updated!');
    return redirect()->route('animal.detail', $animal->id);
  }

  // Validation
  private function validateInput($request)
  {
    $this->validate(
      $request,
      [
        'name' => 'required|min:2',
        'year' => 'required|numeric',
        'species' => 'required',
        'age' => 'required',
        'weight' => 'required'

      ],
      [
        'name.required' => 'Please be so kind and fill-in the name of the movie :)'
      ]
    );
  }
}
