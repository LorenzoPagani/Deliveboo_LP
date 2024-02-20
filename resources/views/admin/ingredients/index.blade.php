@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Ingredients</h1>
                <a class="text-right" href="{{ route('admin.ingredients.create') }}">Add Ingredient</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ingredient Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ingredients as $ingredient)
                            <tr>
                                <td>{{ $ingredient->name }}</td>
                                <td>
                                    <a href="{{ route('admin.ingredients.show', $ingredient->id) }}"
                                        class="btn btn-default">View</a>
                                    <a href="{{ route('admin.ingredients.edit', $ingredient->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST"
                                        action="{{ route('admin.ingredients.destroy', $ingredient->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
