@extends('layout')

@section('content')
    <h1>Create</h1>

    <form action="{{ route('teams.store') }}" method="post">
        @csrf

        <label for="name">Csapat neve:</label>
        <input type="text" name="name">
        @error('name')
            <div class="">{{ $message }}</div>
        @enderror

        <label for="contact">Csapat elérhetősége:</label>
        <input type="text" name="contact">
        @error('contact')
        <div class="">{{ $message }}</div>
        @enderror

        <button type="submit">Beküld</button>
    </form>
@endsection
