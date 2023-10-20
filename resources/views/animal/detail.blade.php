<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal Detail</title>
</head>
<body>
    @include('components.header')
    <h2>Animal detail</h2>
    @if($image)
        <div class="image" >
            <img width="150px" height="150px" src="/images/pets/{{ $image }}" alt="Image">
        </div>
    @endif
    <table>
        <tr>
            <th>Name</th>
            <th>Breed</th>
            <th>Species</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td>{{ $animal->name }}</td>
            <td>{{ $animal->breed }}</td>
            <td>{{ $animal->sepecies }}</td>
            <td>{{ $animal->age }}</td>
            <td>{{ $animal->weight }}</td>
        </tr>
    </table>
  <a href="{{ route('animal.edit', $animal->id) }}">Edit</a>
</body>
</html>