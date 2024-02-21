@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Edit restaurant</h1>
        <form action="{{ route('admin.restaurants.update', $restaurant->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Restaurant name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $restaurant->name }}">
            </div>
            <div class="form-group">
                <label for="address">Restaurant address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $restaurant->address }}">
            </div>
            <div class="form-group">
                <label for="description">Restaurant description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $restaurant->description }}">
            </div>
            <div class="form-group">
                <label for="vat_number">Restaurant VAT number</label>
                <input type="text" class="form-control" id="vat_number" name="vat_number"
                    value="{{ $restaurant->vat_number }}">
            </div>
            {{-- <div class="form-group">
                <label for="category_id">Restaurant categories</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $restaurant->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div> --}}
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
