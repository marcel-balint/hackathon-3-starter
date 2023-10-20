<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="/form.css">
</head>
<body>
    
    @if ($animal->id)
    <a href="/">< back home</a>
    <h2>Edit</h2>
        <form action="{{ route('animal.update', $animal->id) }}" method="post">
        @method('PUT')
    @else
    <a href="/">< back home</a>
    <h2>Create</h2>
    <form action="{{ route('animal.store') }}" method="post">
        <input type="hidden" value="{{ $owner->id }}">
    @endif

        @csrf
    <label for="name">Name</label>
    <br>
    <input type="text" class="{{ $errors->has('name') ? 'error-active' : '' }}" name="name" value="{{ old('name', $animal->name) }}">
    <p class="err-msg-para" style="display: {{ $errors->has('name') ? 'block' : 'none' }}">{{ $errors->first('name') }}</p>
    <br>

    <label for="species">Species</label>
    <br>
    <input type="text" class="{{ $errors->has('species') ? 'error-active' : '' }}"  name="species" value="{{ old('species', $animal->species) }}">
    <p class="err-msg-para" style="display: {{ $errors->has('species') ? 'block' : 'none' }}">{{ $errors->first('species') }}</p>
    <br>
    <br>
    <label for="breed">Breed</label>
    <br>
    <input type="text" class="{{ $errors->has('breed') ? 'error-active' : '' }}"  name="breed" value="{{ old('breed', $animal->breed) }}">
    <p class="err-msg-para" style="display: {{ $errors->has('breed') ? 'block' : 'none' }}">{{ $errors->first('breed') }}</p>
    <br>
    <br>
    <label for="age">Age</label>
    <br>
    <input type="text" class="{{ $errors->has('age') ? 'error-active' : '' }}"  name="age" value="{{ old('age', $animal->age) }}">
    <p class="err-msg-para" style="display: {{ $errors->has('age') ? 'block' : 'none' }}">{{ $errors->first('age') }}</p>
    <br>
    <br>
    <label for="weight">Weight</label>
    <br>
    <input type="text" class="{{ $errors->has('weight') ? 'error-active' : '' }}"  name="weight" value="{{ old('weight', $animal->weight) }}">
    <p class="err-msg-para" style="display: {{ $errors->has('weight') ? 'block' : 'none' }}">{{ $errors->first('weight') }}</p>
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