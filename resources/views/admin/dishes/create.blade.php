@extends('layouts.admin')

@section("title")
Create a new dish
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('admin.dishes.store') }}" method="post">
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
                <label for="name">Dish name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter dish name">
            </div>
            <div class="form-group">
                <label for="picture">Dish picture</label>
                <input type="text" class="form-control" id="picture" name="picture" placeholder="Enter picture URL">
            </div>
            <div class="form-group">
                <label for="description">Dish description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Dish price</label>
                <input type="number" min="0" step="0.01" max="999.99" class="form-control" id="price" name="price" placeholder="€">
            </div>
            <div class="form-group">
                <label for="visible">Dish visibility</label>
                <select class="form-control" id="visible" name="visible">
                    <option value="1">Visible</option>
                    <option value="0">Not visible</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients</label>
                <textarea class="form-control" name="ingredients" id="ingredients" cols="30" rows="10" placeholder="enter ingredients"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Dish</button>
        </form>
    </div>
@endsection
