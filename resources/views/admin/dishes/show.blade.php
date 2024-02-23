@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Show Dish</h1>
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-header text-center">{{ $dish->name }}</div>
                <div class="card-body d-flex flex-column align-items-center">
                    <img src="{{ $dish->picture }}" alt="photo">
                    <p class="mt-2">{{ $dish->description }}</p>
                    <p class="mt-2">ingredients: {{ $dish->ingredients }}</p>
                    <a class="btn btn-primary" href="{{ route('admin.dishes.index') }}">Menù</a>
                </div>
            </div>
        </div>
    </div>
@endsection
