@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Edit restaurant</h1>
        <form action="{{ route('admin.restaurants.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $restaurant->name }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $restaurant->address }}">
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture"
                    name="picture" placeholder="Enter picture " value="{{ old('picture') }}">
                <div id="prev_box" class=" d-none">
                    <img class=" pic-preview" id="thumb" src="#" alt="your image" />
                    <div id="erase_prev" class="btn btn-danger">remove picture</div>
                </div>
                @error('picture')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $restaurant->description }}">
            </div>
            <div class="form-group">
                <label for="vat">VAT number</label>
                <input type="text" class="form-control" id="vat" name="vat" value="{{ $restaurant->vat }}">
            </div>
            <div class="form-group">
                <label for="type">Categories</label>
                <select multiple class="form-control" id="type" name="types[]">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == $restaurant->type ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
