@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <main>
        <h2>Update {{ $comic->title }}</h2>
        <div class="bg-black text-white py-5">
            <div class="container">
                <div class="row">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input required value="{{ $comic->title }}"
                            class="form-control my-1 @error('title') is-invalid @enderror" type="text" id="title"
                            name="title" placeholder="Title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input value="{{ $comic->series }}" required
                            class="form-control my-1 @error('series') is-invalid @enderror" type="text" id="series"
                            name="series" placeholder="series">
                        @error('series')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input value="{{ $comic->thumb }}" class="form-control my-1" type="text" id="thumb"
                            name="thumb" placeholder="Image">
                        <input value="{{ $comic->price }}" required
                            class="form-control my-1 @error('price') is-invalid @enderror" type="text" id="price"
                            name="price" placeholder="Price">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control my-1" type="text" id="description" name="description" placeholder="description">{{ $comic->description }}</textarea>
                        <input value="{{ $comic->type }}" required
                            class="form-control my-1 @error('type') is-invalid @enderror" type="text" id="type"
                            name="type" placeholder="Type">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <button class="btn
                            btn-primary mt-2" type="submit">Add</button>
                        <input type="reset" class="btn btn-danger mt-2" value="Reset">
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
