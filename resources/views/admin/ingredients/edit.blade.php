@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Edit ingredient</h1>
        <form action="{{ route('admin.ingredients.update', $ingredient->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Ingredient name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $ingredient->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
