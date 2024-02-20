@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Create a new ingredient</h1>
        <form action="{{ route('admin.ingredients.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Ingredient name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter ingredient name">
            </div>
            <div class="form-group">
                <label for="description">Ingredient description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
