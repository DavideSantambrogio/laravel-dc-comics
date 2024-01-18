
@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>

    
    <p>ID: {{ $comic->id }}</p>
    <p>Descrizione: {{ $comic->description }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>Pezzo: {{ $comic->price }}</p>
    <p>Serie: {{ $comic->series }}</p>
    

    <a href="{{ route('comics.index') }}">Indietro</a>
@endsection
