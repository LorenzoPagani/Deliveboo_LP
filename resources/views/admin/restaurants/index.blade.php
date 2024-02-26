@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Restaurant</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Restaurant Name</th>
                            <th>picture</th>
                            <th>Address</th>
                            <th>description</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->name }}</td>
                                <td><img src="{{ $restaurant->picture }}" style="width=100px;height:100px" alt="photo"></td>
                                <td>{{ $restaurant->address }}</td>
                                <td>{{ $restaurant->description }}</td>
                                <td>
                                    @foreach ($restaurant->types as $type)
                                        {{ $type->name }}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.restaurants.show', $restaurant->id) }}"
                                        class="btn btn-primary">Details</a>
                                    <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST"
                                        action="{{ route('admin.restaurants.destroy', $restaurant->id) }}">
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
