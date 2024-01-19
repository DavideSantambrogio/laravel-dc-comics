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

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'thumb' => 'required',
        'price' => 'required',
        'series' => 'required',
        'sale_date' => 'required',
        'type' => 'required',
    ]);

    Comic::create($validatedData);

    return redirect()->route('comics.index')->with('success', 'Comic creato');
}

    public function destroy($id)
{
    $comic = Comic::find($id);

    if ($comic) {
        $comic->delete();
        return redirect()->route('comics.index')->with('success', 'Comic cancellato con successo');
    }

    return redirect()->route('comics.index')->with('error', 'Comic non trovato');
}

    public function edit($id)
{
    $comic = Comic::findOrFail($id);
    return view('comics.edit', compact('comic'));
}
    
    public function update(Request $request, $id)
{
    $comic = Comic::findOrFail($id);

    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'thumb' => 'required',
        'price' => 'required',
        'series' => 'required',
        'sale_date' => 'required',
        'type' => 'required',
    ]);

    $comic->update($validatedData);

    return redirect()->route('comics.index')->with('success', 'Comic modificato con successo');
}
}
