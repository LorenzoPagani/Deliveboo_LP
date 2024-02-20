@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Show ingredient</h1>
        <div class="form-group">
            <label for="name">Ingredient name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $ingredient->name }}" disabled>
        </div>
    </div>
@endsection
