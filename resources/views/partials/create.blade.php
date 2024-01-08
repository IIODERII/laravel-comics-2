@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="bg-black text-white py-5">
            <div class="container">
                <div class="row">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <input class="form-control my-1" type="text" id="title" name="title" placeholder="Title">
                        <input class="form-control my-1" type="text" id="series" name="series" placeholder="series">
                        <input class="form-control my-1" type="text" id="thumb" name="thumb" placeholder="Image">
                        <input class="form-control my-1" type="text" id="price" name="price" placeholder="Price">
                        <input class="form-control my-1" type="text" id="description" name="description"
                            placeholder="description">
                        <input class="form-control my-1" type="text" id="type" name="type" placeholder="Type">
                        <button class="btn btn-primary" type="submit">Add</button>
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
