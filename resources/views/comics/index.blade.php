@extends('layouts.app')

@section('content')
    <h1>Comics List</h1>

    
    <ol>
        @foreach($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>
        @endforeach
    </ol>

    <a href="http://127.0.0.1:8000/">Inizio</a>


@endsection