<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $genres = Genre::get();
        return view('admin.index', compact('genres'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required',
           'imdb' => 'required',
            'description' => 'required',
        ]);

        $image = 'https://i.pinimg.com/564x/72/8a/21/728a21d60faa5f74c3670f2128c22013.jpg';

        Movie::create([
            'name' => $request->name,
            'imdb' => $request->imdb,
            'description' => $request->description,
            'image' => $image,
            'genre_id' => $request->genre,
        ]);

        return redirect('/admin');
    }

    public function genreIndex()
    {
        return view('admin.genre');
    }

    public function storeGenre(Request $request)
    {
        Genre::create([
            'Genre_name' => $request->name,
        ]);

        return redirect('/admin/genre');
    }

}
