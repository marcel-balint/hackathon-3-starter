<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
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




  public function search()
  {
    $getSearch = $_GET['search'] ?? null;

    if ($getSearch) {
      $result = Owner::query()
        ->where('surname', 'like', '%' . $getSearch . '%')
        ->orderBy('surname', 'asc')
        ->get();
    }
    return view('search', compact('result'));
  }


  public function searchPet()
  {
    $getSearch = $_GET['search'] ?? null;

    if ($getSearch) {
      $result = Animal::query()
        ->where('name', 'like', '%' . $getSearch . '%')
        ->orderBy('name', 'asc')
        ->get();
    }
    return view('searchpet', compact('result'));
  }
}
