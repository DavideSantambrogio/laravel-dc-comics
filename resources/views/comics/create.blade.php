@extends('layouts.app')

@section('content')
    <h1>Crea Comic</h1>

    @if ($errors->any())
        <div>
            <h3>Errori</h3>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" >
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" id="description" ></textarea>
        </div>

        <div>
            <label for="thumb">Copertina URL:</label>
            <input type="text" name="thumb" id="thumb" >
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="text" name="price" id="price"  value="$">
        </div>

        <div>
            <label for="series">Serie:</label>
            <input type="text" name="series" id="series" >
        </div>

        <div>
            <label for="sale_date">Sale Date:</label>
            <input type="date" name="sale_date" id="sale_date" >
        </div>

        <div>
            <label for="type">Type:</label>
            <select class="form-select" id="type" name="type" >
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crea Comic</button>
    </form>

    <a href="{{ url('/') }}">Inizio</a>
@endsection
