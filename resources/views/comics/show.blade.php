@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>{{ $comic->title }}</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text">ID: {{ $comic->id }}</p>
                        <p class="card-text">Description: {{ $comic->description }}</p>
                        <p class="card-text">Price: {{ $comic->price }}</p>
                        <p class="card-text">Series: {{ $comic->series }}</p>
                        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back to Comics List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
