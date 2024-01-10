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
                        <a href="{{ route('comics.edit', $comic->id) }}" class="text-white btn btn-success rounded-0">Edit</a>
                        <a href="{{ route('comics.destroy', $comic->id) }}">
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline"
                                id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white btn btn-danger rounded-0 cancel-button"
                                    data-item-title="{{ $comic->title }}">Delete</button>
                            </form>
                        </a>
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

    @include('partials/modal_delete')
@endsection
