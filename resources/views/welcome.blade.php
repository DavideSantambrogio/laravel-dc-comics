@extends('layouts.app')

@section('content')
    <h1>Welcome to laravel</h1>
    <ul>
        <li><a href="{{ route('comics.index') }}">Comics</a></li>
        
        <li><a href="{{ route('comics.create') }}">Create</a></li>
    </ul>   
@endsection