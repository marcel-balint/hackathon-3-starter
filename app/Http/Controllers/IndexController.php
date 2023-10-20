<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Dotenv\Validator;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    $pets = Animal::query()
      ->orderBy('name', 'asc')
      ->limit(50)
      ->get();


    return view('index', compact('pets'));
  }

  public function search(Request $request)
  {
    // Validation
    $request->validate([
      'search_owner' => 'required|min:1',
    ]);

    $getSearch = $request->input('search_owner');
    if ($getSearch) {
      $result = Owner::query()
        ->where('surname', 'like', '%' . $getSearch . '%')
        ->orderBy('surname', 'asc')
        ->get();
    }
    return view('search', compact('result', 'getSearch'));
  }


  public function searchPet(Request $request)
  {
    // Validation
    $request->validate([
      'search' => 'required|min:1',
    ]);

    $getSearch = $request->input('search');
    if ($getSearch) {
      $result = Animal::query()
        ->where('name', 'like', '%' . $getSearch . '%')
        ->orderBy('name', 'asc')
        ->get();
    }
    return view('searchpet', compact('result', 'getSearch'));
  }
}
