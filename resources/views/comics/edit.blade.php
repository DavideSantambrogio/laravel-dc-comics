@extends('layouts.app')

@section('content')
    <h1>Edit Comic</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" value="{{ $comic->title }}" required>
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" id="description" required>{{ $comic->description }}</textarea>
        </div>

        <div>
            <label for="thumb">Copertina URL:</label>
            <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}" required>
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="text" name="price" id="price" value="{{ $comic->price }}" required>
        </div>

        <div>
            <label for="series">Serie:</label>
            <input type="text" name="series" id="series" value="{{ $comic->series }}" required>
        </div>

        <div>
            <label for="sale_date">Sale Date:</label>
            <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" required>
        </div>

        <div>
            <label for="type" class="form-label">Type:</label>
            <select class="form-select" id="type" name="type" required>
                <option value="comic book" {{ $comic->type === 'comic book' ? 'selected' : '' }}>Comic Book</option>
                <option value="graphic novel" {{ $comic->type === 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
            </select>
        </div>

        <button type="submit">Salva</button>
    </form>

    <a href="{{ route('comics.index') }}">Comics List</a>
@endsection

