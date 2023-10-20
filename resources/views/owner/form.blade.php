<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Owner</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    @include('components.header')
    @include('components.messages')
    
    @if ($owner->id)
        <form action="{{ route('owner.update', $owner->id) }}" method="post">
            @method('PUT')
    @else
        <form action="{{ route('owner.store') }}" method="post">
    @endif
            @csrf
            <label>First Name:</label>
            <br>
            <input name="first_name" class="{{ $errors->has('first_name') ? 'error-active' : '' }}" value="{{ old('first_name', $owner->first_name) }}"/>
            <p class="err-msg-para" style="display: {{ $errors->has('first_name') ? 'block' : 'none' }}">{{ $errors->first('first_name') }}</p>

            <br>
            <label>Surname:</label>
            <br>
            <input name="surname" class="{{ $errors->has('surname') ? 'error-active' : '' }}" value="{{ old('surname', $owner->surname) }}"/>
            <p class="err-msg-para" style="display: {{ $errors->has('surname') ? 'block' : 'none' }}">{{ $errors->first('surname') }}</p>

            <br>
            <label>Email:</label>
            <br>
            <input name="email" class="{{ $errors->has('email') ? 'error-active' : '' }}" value="{{ old('email', $owner->email) }}"/>
            <p class="err-msg-para" style="display: {{ $errors->has('email') ? 'block' : 'none' }}">{{ $errors->first('email') }}</p>

            <br>
            <label>Phone Number:</label>
            <br>
            <input name="phone" class="{{ $errors->has('phone') ? 'error-active' : '' }}" value="{{ old('phone', $owner->phone) }}"/>
            <p class="err-msg-para" style="display: {{ $errors->has('phone') ? 'block' : 'none' }}">{{ $errors->first('phone') }}</p>

            
            <br>
            <label>Address:</label>
            <br>
            <input name="address" class="{{ $errors->has('address') ? 'error-active' : '' }}" value="{{ old('address', $owner->address) }}"/>
            <p class="err-msg-para" style="display: {{ $errors->has('address') ? 'block' : 'none' }}">{{ $errors->first('address') }}</p>

            <br><br>
            

            <button>Save</button>
            <button><a href="{{ route('animal.form') }}">Add Pet</a></button>
        </form>


</body>
</html>