<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    

    
}
