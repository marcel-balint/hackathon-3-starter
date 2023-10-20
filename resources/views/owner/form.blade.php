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
            <input name="first_name" value="{{ old('name', $owner->first_name) }}"/>
            <br>
            <label>Surname:</label>
            <br>
            <input name="surname" value="{{ old('name', $owner->surname) }}"/>
            <br>
            <label>Email:</label>
            <br>
            <input name="email" value="{{ old('email', $owner->email) }}"/>
            <br>
            <label>Phone Number:</label>
            <br>
            <input name="phone" value="{{ old('phone', $owner->phone) }}"/>
            <br>
            <label>Address:</label>
            <br>
            <input name="address" value="{{ old('address', $owner->address) }}"/><br><br>

            <button>Save</button>
            <button><a href="{{ route('animal.form') }}">Add Pet</a></button>
        </form>


</body>
</html>