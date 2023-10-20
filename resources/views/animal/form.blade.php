<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    @include('components.header')
    @if ($animal->id)
    <a href="/">< back home</a>
    <h2>Edit</h2>
        <form action="{{ route('animal.update', $animal->id) }}" method="post">
        @method('PUT')
    @else
    <a href="/">< back home</a>
    <h2>Create</h2>
    <form action="{{ route('animal.store') }}" method="post">
        <input type="hidden" value="{{ $animal->owner_id }}">
    @endif

        @csrf
    <label for="name">Name</label>
    <br>
    <input type="text" class="{{ $errors->first('name') ? 'error-active' : '' }}" name="name" value="{{ old('name', $animal->name) }}">
    <p class="err-msg-para" style="display: {{ $errors->first('name') ? 'block' : 'none' }}">{{ $errors->first('name') }}</p>
    <br>

    <label for="species">Species</label>
    <br>
    <input type="text" class="{{ $errors->first('species') ? 'error-active' : '' }}"  name="species" value="{{ old('species', $animal->species) }}">
    <p class="err-msg-para" style="display: {{ $errors->first('species') ? 'block' : 'none' }}">{{ $errors->first('species') }}</p>
    <br>
    <br>
    <label for="breed">Breed</label>
    <br>
    <input type="text" class="{{ $errors->first('breed') ? 'error-active' : '' }}"  name="breed" value="{{ old('breed', $animal->breed) }}">
    <p class="err-msg-para" style="display: {{ $errors->first('species') ? 'block' : 'none' }}">{{ $errors->first('species') }}</p>
    <br>
    <br>
    <label for="age">Age</label>
    <br>
    <input type="text" class="{{ $errors->first('age') ? 'error-active' : '' }}"  name="age" value="{{ old('age', $animal->age) }}">
    <p class="err-msg-para" style="display: {{ $errors->first('species') ? 'block' : 'none' }}">{{ $errors->first('species') }}</p>
    <br>
    <br>
    <label for="weight">Weight</label>
    <br>
    <input type="text" class="{{ $errors->first('weight') ? 'error-active' : '' }}"  name="weight" value="{{ old('weight', $animal->weight) }}">
    <p class="err-msg-para" style="display: {{ $errors->first('species') ? 'block' : 'none' }}">{{ $errors->first('species') }}</p>
    <br>
    <br>
    @if($animal->id)
    <button>Edit</button>
    @else 
    <button>Create</button>
    @endif
    </form>
</body>
</html>