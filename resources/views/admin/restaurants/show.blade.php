@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Show restaurant</h1>
        <div class="form-group">
            <label for="name">Restaurant name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $restaurant->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="address">Restaurant address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $restaurant->address }}"
                disabled>
        </div>
        <div class="form-group">
            <label for="description">Restaurant description</label>
            <textarea class="form-control" id="description" name="description" rows="3" disabled>{{ $restaurant->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="vat_number">Restaurant VAT number</label>
            <input type="text" class="form-control" id="vat_number" name="vat_number"
                value="{{ $restaurant->vat_number }}" disabled>
        </div>
        <div class="form-group">
            <label for="category_id">Restaurant categories</label>
            <select class="form-control" id="category_id" name="category_id" disabled>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $restaurant->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
@endsection
