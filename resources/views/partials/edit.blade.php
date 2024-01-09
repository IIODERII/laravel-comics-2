@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h2>Update {{ $comic->title }}</h2>
        <div class="bg-black text-white py-5">
            <div class="container">
                <div class="row">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input required class="form-control my-1" type="text" id="title" name="title"
                            placeholder="Title" value="{{ $comic->title }}">
                        <input required class="form-control my-1" type="text" id="series" name="series"
                            placeholder="series" value="{{ $comic->series }}">
                        <input value="{{ $comic->thumb }}" class="form-control my-1" type="text" id="thumb"
                            name="thumb" placeholder="Image">
                        <input required class="form-control my-1" type="text" id="price" name="price"
                            placeholder="Price" value="{{ $comic->price }}">
                        <textarea rows="5" class="form-control my-1" type="text" id="description" name="description"
                            placeholder="description"> {{ $comic->description }}</textarea>
                        <input value="{{ $comic->type }}" required class="form-control my-1" type="text" id="type"
                            name="type" placeholder="Type">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <input type="reset" class="btn btn-danger" value="Reset">
                    </form>
                </div>
            </div>
        </div>

        <div class="final-one">
            <div class="container">
                <div class="row">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
