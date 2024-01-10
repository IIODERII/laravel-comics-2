<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
        return view('comics.comics', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StoreComicRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|min:3|max:50',
        //     'price' => 'required',
        //     'type' => 'required',
        // ]);
        //$formdata = $this->validateComic($request->all());

        $formdata = $request->validated();

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
        return view('comics.view_comic', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // $request->validate([
        //     'title' => 'required|min:3|max:50',
        //     'price' => 'required',
        //     'type' => 'required',
        // ]);
        //$formdata = $this->validateComic($request->all());

        $formdata = $request->validated();

        $data = $request->all();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['type'];
        $comic->sale_date = '2020-07-01';
        $comic->type = 'a piacere';
        $comic->update();
        return view('comics.view_comic', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "The comic $comic->title has been successfully deleted");
    }

    // private function validateComic($data)
    // {
    //     $validator = Validator::make($data, [
    //         'title' => 'required|min:3|max:50',
    //         'price' => 'required',
    //         'type' => 'required',
    //     ], [
    //         'title.required' => 'You have to insert a title',
    //         'price.required' => 'You have to insert a price',
    //         'type.required' => 'You have to insert a type',
    //         'title.min' => 'The minimum number of characters for the title is :min',
    //         'title.max' => 'The maximum number of characters for the title is :max',
    //     ])->validate();

    //     return $validator;
    // }
}
