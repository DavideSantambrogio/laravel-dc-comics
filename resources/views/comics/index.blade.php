@extends('layouts.app')

@section('content')
    <h1>Comics List</h1>

    
    <ul>
        @foreach($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>
        @endforeach
    </ul>


@endsection