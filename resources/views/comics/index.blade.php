@extends('layouts.app')

@section('content')
    <h1>Comics List</h1>

    
    <ol>
        @foreach($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>

            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina Comic</button>
            </form>
        @endforeach
    </ol>

    <a href="{{ url('/') }}">Inizio</a>



@endsection