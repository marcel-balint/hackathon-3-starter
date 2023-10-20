<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>St. Hector's Veterinary Clinic</title>

  <link rel="stylesheet" href="/style.css">

</head>
<body>
  <h1>St. Hector's Veterinary Clinic</h1>
  <hr>
  <h2>Search for the owner:</h2>
  <form class="search_owner" action="/search" method="get">
    <input type="text" name="search">
    <button>Search</button>
  </form>
  
  {{-- adding search for pet --}}
    <h2>Search for the pet:</h2>
   <form action="/searchpet" method="get">
        <input type="text" name="search">
        <button>Search</button>
    </form>

    <br>
    <br>
    <br>

    <a href="{{ route('owner.create')}}">Create new owner</a><br>

    <br>
    <br>
    <br>

    {{-- Here will be an alphabetically sorted list of pets and their owners --}}
    <h3>List of aminals:</h3>
  <table>
    <thead>
      <tr>
        
        <th> Owner </th>
        <th> Name </th>
        <th> Species </th>
        <th> Breed </th>
        <th> Age </th>
        <th> Weight </th>
        <th> ---- </th>
      </tr>
    </thead>
    <tbody>
    @foreach ($pets as $pet)
        <tr>
      
      <td>{{$pet->owner['surname']}}</td>
      <td>{{$pet->name}} </td>
      <td>{{$pet->species}} </td>
      <td>{{$pet->breed}} </td>
      <td>{{$pet->age}} </td>
      <td>{{$pet->weight}} </td>
      {{-- here put the pet id to the url link --}}
      <td><a href="{{ route('animal.detail', $pet->id) }}">Detail</a></td>
    </tr>
        
    @endforeach
        </tbody>

  </table>
  {{-- here will be pagginig --}}

  
    

</body>
</html>