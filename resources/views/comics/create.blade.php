@extends('layouts.app')

@section('content')
    <h1>Crea Comic</h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" id="description" rows="4" required></textarea>
        </div>

        <div>
            <label for="thumb">Copertina URL:</label>
            <input type="text" name="thumb" id="thumb" required>
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="text" name="price" id="price" required value="$">
        </div>

        <div>
            <label for="series">Serie:</label>
            <input type="text" name="series" id="series" required>
        </div>

        <div>
            <label for="sale_date">Sale Date:</label>
            <input type="date" name="sale_date" id="sale_date" required>
        </div>

        <div>
            <label for="type">Type:</label>
            <select class="form-select" id="type" name="type" required>
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crea Comic</button>
    </form>

    <a href="{{ url('/') }}">Inizio</a>
@endsection
