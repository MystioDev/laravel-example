@extends('layout')

@section('content')
    <h1>Edit</h1>

    <form action="{{ route('teams.update', $team->id) }}" method="post">

        @csrf
        @method('PUT')

        <label for="name">Csapat neve:</label>
        <input type="text" name="name" value="{{ old('name', $team->name) }}">
        @error('name')
        <div class="">{{ $message }}</div>
        @enderror

        <label for="contact">Csapat elérhetősége:</label>
        <input type="text" name="contact" value="{{ old('contact', $team->contact) }}">
        @error('contact')
        <div class="">{{ $message }}</div>
        @enderror

        <button type="submit">Beküld</button>
    </form>
@endsection
