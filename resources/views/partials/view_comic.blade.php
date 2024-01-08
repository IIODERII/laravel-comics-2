@php
    $prev = $comic->id - 1;
    $next = $comic->id + 1;
@endphp

@extends('layouts.app')

@section('title', 'ViewComic')

@section('content')
    <main class="py-5" id="view_comic">
        <div class="container">
            <div class="d-flex justify-content-evenly">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="h-100">
                <div class="px-4 d-flex flex-column justify-content-between h-100">
                    <div>
                        <h1>{{ $comic->title }}</h1>
                        <p>{{ $comic->description }}</p>
                    </div>

                    <div class="d-flex justify-content-between pt-5">
                        <div>
                            <h3>Price</h3>
                            <div class="badge bg-primary fs-6">{{ $comic->price }}</div>
                        </div>

                        <div class="d-flex">
                            <div class="px-2">
                                <h3>Series</h3>
                                <div class="badge bg-success fs-6">{{ $comic->series }}</div>
                            </div>
                            <div class="px-2">
                                <h3>Type</h3>
                                <div class="badge bg-danger fs-6">{{ $comic->type }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
