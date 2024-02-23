@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Show restaurant</h1>

        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-header text-center">{{ $restaurant->name }}</div>
                <div class="card-body d-flex flex-column align-items-center">
                    <img src="{{ $restaurant->picture }}" style="width=100px;height:100px" alt="photo">
                    <p class="mt-2">{{ $restaurant->address }}</p>
                    <p class="mt-2">{{ $restaurant->description }}</p>
                    <p class="mt-2">{{ $restaurant->vat }}</p>
                    <p class="mt-2">Categories:
                        @foreach ($restaurant->types as $type)
                            {{ $type->name }}
                        @endforeach
                    </p>
                    <a class="btn btn-primary" href="{{ route('admin.dishes.index') }}">Menù</a>
                </div>
            </div>
        </div>

    </div>
@endsection
