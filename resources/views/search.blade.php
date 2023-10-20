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
  @include('components.header')
  <a href="/">< back home</a>
  <h2>Search results for owners:</h2>
  @if(count($result) > 0)
  <table>
    <thead>
      <tr>
        <th> ID </th>
        <th> First name </th>
        <th> Surname </th>
        <th> Email </th>
        <th> Phone number </th>
        <th> Address </th>
        <th> ---- </th>
      </tr>
    </thead>
    <tbody>
  
    @foreach ($result as $owner)
    <tr>
      <td>{{$owner->id}} </td>
      <td>{{$owner->first_name}} </td>
      <td>{{$owner->surname}} </td>
      <td>{{$owner->email}} </td>
      <td>{{$owner->phone}} </td>
      <td>{{$owner->adress}} </td>
    {{-- here put the pet id to the url link --}}
      <td><a href="{{ route('owner.edit', $owner->id) }}">Edit</a></td>
    
      
    </tr>
        
    @endforeach
    </tbody>

  </table>
  @else
  <p>No results found for: <strong><i>{{ $getSearch }}</i></strong></p>
  @endif
</body>
</html>