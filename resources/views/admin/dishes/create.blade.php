@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Create a new dish</h1>
        <form action="{{ route('admin.dishes.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Dish name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter dish name">
            </div>
            <div class="form-group">
                <label for="description">Dish description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Dish price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter dish price"> €
            </div>
            <div class="form-group">
                <label for="visibility">Dish visibility</label>
                <select class="form-control" id="visibility" name="visibility">
                    <option value="1">Visible</option>
                    <option value="0">Not visible</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">Dish category</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
