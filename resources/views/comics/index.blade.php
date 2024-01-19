@extends('layouts.app')

@section('content')
    <h1>Comics List</h1>

    
    <ol>
        @foreach($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>

            <form action="{{ route('comics.destroy', $comic->id) }}" method="post" id="deleteForm{{ $comic->id }}">
                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmDelete({{ $comic->id }})">Elimina Comic</button>
            </form>
            <form action="{{ route('comics.edit', $comic->id) }}" method="get" style="display: inline;">
                <button type="submit">Modifica Comic</button>
            </form>
        @endforeach
    </ol>

    <a href="{{ url('/') }}">Inizio</a>
    

    <script>
        function confirmDelete(comicId) {
            if (confirm('Sei sicuro di voler cancellare questo Comic?')) {
                document.getElementById('deleteForm' + comicId).submit();
            }
        }
    </script>

@endsection