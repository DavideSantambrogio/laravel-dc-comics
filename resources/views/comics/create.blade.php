@extends('layouts.app')

@section('content')
    <h1>Crea</h1>

    <form action="{{ route('comics.store') }}" method="post">
        <br>
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Descrizione:</label>
        <textarea name="description" id="description" rows="4" required></textarea>
        <br>
        <label for="thumb">Copertina URL:</label>
        <input type="text" name="thumb" id="thumb" required>
        <br>
        <label for="price">Prezzo:</label>
        <input type="text" name="price" id="price" required>
        <br>
        <label for="series">Serie:</label>
        <input type="text" name="series" id="series" required>
        <br>
        <label for="sale_date">Sale Date:</label>
        <input type="date" name="sale_date" id="sale_date" required>
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" required>
        <br>
        <button type="submit">Crea Comic</button>
    </form>
    
    

    <a href="http://127.0.0.1:8000/">Inizio</a>
@endsection