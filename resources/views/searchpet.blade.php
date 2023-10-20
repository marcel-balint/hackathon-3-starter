<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>St. Hector's Veterinary Clinic</title>
</head>
<body>
  <h1>St. Hector's Veterinary Clinic</h1>
  <hr>
  <h2>Search results for pets:</h2>


  <table>
    <thead>
      <tr>
        <th> ID </th>
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
  
    @foreach ($result as $pet)
    <tr>
      <td>{{$pet->id}} </td>
      <td>{{$pet->owner['surname']}}</td>
      <td>{{$pet->name}} </td>
      <td>{{$pet->species}} </td>
      <td>{{$pet->breed}} </td>
      <td>{{$pet->age}} </td>
      <td>{{$pet->weight}} </td>
      <td><a href="">Detail</a></td>
    </tr>
        
    @endforeach
    </tbody>

  </table>
  
</body>
</html>