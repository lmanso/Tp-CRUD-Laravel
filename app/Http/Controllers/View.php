<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Serie as Serie;
Use App\Actor as Actor;
Use App\Genre as Genre;

class View extends Controller
{
    public function contact($name){
    return view('contact', [
    "name" => $name,
    "data" => [
        "pizza",
        "tofu",
        "poivron",
        "herbe",
        "piments",
    ],
    'showAside' => true,
    ]);
    }
    
    public function home() {
        return view('home');
    }

    public function series()
    {
        
        $series = Serie::all();
        return view('series', ['series' => $series]);
    }
    public function addSeries()
    {
        $actors = Actor::all();
        $genres = Genre::all();
        return view('addseries', [
            "actors" => $actors,
            "genres" => $genres,
        ]);
    }
      public function updateForm(Request $request)
    {
        $serie = Serie::find($request->input('id'));
        $actors = Actor::all();
        $genres = Genre::all();
        return view('update', [
            'serie' => $serie,
            'actors' => $actors,
            'genres' => $genres,
            ]);
    }
}