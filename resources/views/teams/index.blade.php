@extends('layout')

@section('content')
    <h1>Index</h1>

    <div class="">
        @foreach($teams as $team)
            <div class="">
                <h1>{{ $team->name }}</h1>
                <p>{{ $team->contact }}</p>

                <a href="{{ route('teams.edit', $team->id) }}">Módosítás</a>
                <a href="{{ route('teams.show', $team->id) }}">Részletek</a>
                <form action="{{ route('teams.destroy', $team->id) }}" method="post" onclick="return confirm('Biztosan törölni akarod?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Törlés</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
