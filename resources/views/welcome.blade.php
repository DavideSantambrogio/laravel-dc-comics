@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header ">
                        <h1 > Il tuo gestionale</h1>
                    </div>

                    <div class="card-body">                        
                        <ul class="list-group">
                            <li class="list-group-item"><h5>Vai alla lista dei tuoi fumetti</h5><a href="{{ route('comics.index') }}" class="btn btn-primary">Comics</a></li>
                            <li class="list-group-item"><h5>Aggiungi un nuovo fumetto</h5><a href="{{ route('comics.create') }}" class="btn btn-success">Create</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
