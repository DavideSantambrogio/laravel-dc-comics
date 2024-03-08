@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Comics List</h1>
        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-success mr-2">Add New Comic</a>
            <a href="{{ route('welcome') }}" class="btn btn-secondary">Back to Welcome Page</a>
        </div>
        <div class="row row-cols-4">
            @foreach ($comics as $comic)
                <div class="col mb-4">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}" style="height: 350px; object-fit: cover;">
                        <div class="card-body mt-auto d-flex flex-column">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <div class="mt-auto">
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
