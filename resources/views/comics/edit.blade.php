@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Edit Comic</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $comic->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="thumb">Thumbnail URL:</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
                    </div>

                    <div class="form-group">
                        <label for="series">Series:</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
