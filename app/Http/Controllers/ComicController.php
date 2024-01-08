<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('partials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['type'];
        $newComic->sale_date = '2020-07-01';
        $newComic->type = 'a piacere';
        $newComic->save();
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View
     */
    public function show(Comic $comic)
    {
        $comics = config('db.comics');
        return view('partials.view_comic', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
