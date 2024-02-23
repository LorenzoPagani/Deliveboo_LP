@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Dishes</h1>
                <a class="text-right" href="{{ route('admin.dishes.create') }}">Add Dish</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dish Name</th>
                            <th>Price</th>
                            <th>Picture</th>
                            <th>description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dishes as $dish)
                            <tr>
                                <td>{{ $dish->name }}</td>
                                <td>{{ $dish->price }}</td>
                                <td><img src="{{ $dish->picture }}" alt="photo"></td>
                                <td>{{ $dish->description }}</td>
                                <td>
                                    <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST"
                                        action="{{ route('admin.dishes.destroy', $dish->id) }}">
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
