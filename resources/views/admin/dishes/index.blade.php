@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>All Dishes</h1>
            <div class="col-12 col-lg-6">
                @foreach ($dishes as $dish)
                    <div class="card mt-2">
                        <div class="card-header text-center">
                            <h3>
                                {{ $dish->name }}
                            </h3>
                        </div>
                        <div class="card-body d-flex flex-column align-items-center">
                            <img class="w-50 mb-2" src="{{ $dish->picture }}" alt="photo">
                            <div class="card-header rounded">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $dish->price }}</li>
                                    <li class="list-group-item">{{ $dish->description }}</li>


                                    <li class="list-group-item"><a class="btn btn-primary"
                                            href="{{ route('admin.dishes.edit', $dish->id) }}">Modifica</a>
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.dishes.show', $dish->id) }}"
                                            class="btn btn-primary">Dettagli</a>
                                        <form style="display:inline-block" method="POST"
                                            action="{{ route('admin.dishes.destroy', $dish->id) }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="form-control btn btn-danger">Cancella</a>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <style lang="scss">
            body {
                background-color: #c5d7dd;
            }

            .card {
                background-image: url(https://img.freepik.com/free-photo/handrawn-barbecue-elements_125540-588.jpg?size=626&ext=jpg&ga=GA1.1.1700460183.1708646400&semt=ais);
                margin-bottom: 2rem;

                .card-header {
                    box-shadow: 0px 3px 2px 0px rgb(0 0 0 / 30%), 0 2px 4px -1px rgb(7 7 7 / 69%);

                }

                .card-header,
                .list-group-item {
                    background-color: #FF960C;
                    color: white;
                }

                .list-group {
                    border-radius: 10px;

                }

                .card-body {

                    img {
                        border-radius: 50%;
                    }
                }

            }
        </style>
        {{-- <a class="text-right" href="{{ route('admin.dishes.create') }}">Add Dish</a>
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
                                <td><img src="{{ $dish->picture }}" style="width=100px;height:100px" alt="photo"></td>
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
                </table> --}}
    </div>
    </div>
    </div>
@endsection
