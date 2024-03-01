@extends('layouts.admin')

@section('title')
    Create a new dish
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('admin.dishes.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Enter dish name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture"
                    name="picture" placeholder="Enter picture " value="{{ old('picture') }}">
                @error('picture')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description*</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3" value="{{ old('description') }}"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients*</label>
                <textarea class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" id="ingredients"
                    cols="30" rows="10" placeholder="enter ingredients" value="{{ old('ingredients') }}"></textarea>
                @error('ingredients')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price*</label>
                <input type="number" min="0" step="0.01" max="999.99"
                    class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="€"
                    value="{{ old('price') }}">
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="visible">Visibility</label>
                <select class="form-control @error('visible') is-invalid @enderror" id="visible" name="visible"
                    value="{{ old('visible') }}">
                    <option value="1">Visible</option>
                    <option value="0">Not visible</option>
                </select>
                @error('visible')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Dish</button>
        </form>
    </div>
@endsection
