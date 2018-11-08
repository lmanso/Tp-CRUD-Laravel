<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
    public function insertOne(Request $request){
        $serie = new \App\Serie;
        $serie->title = $request->input('title');
        $serie->publication_year = $request->input('publication');
        $serie->save();
        $serie->actors()->attach($request->input('actors'));
        $serie->genres()->attach($request->input('genres'));
        return redirect('/series');
    }

   public function deleteShow(Request $request){
        \App\Serie::destroy($request->input('id'));
        return redirect ('/series');
    }

       public function update(Request $request){
        $serie = \App\Serie::find($request->input('id'));
        $serie->title = $request->input('title');
        $serie->publication_year = $request->input('publication_year');
        $serie->save();
        $serie->actors()->detach();
        $serie->genres()->detach();
        $serie->actors()->attach($request->input('actors'));
        $serie->genres()->attach($request->input('genres'));
        return redirect('/series');
    }
}
