@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>All Dishes</h1>
            </div>
            <div class="col-12">

                <a class="btn btn-success" href="{{ route('admin.dishes.create') }}">add new dish</a>
            </div>
            @foreach ($dishes as $dish)
                <div class="col-12 col-lg-6">
                    <div class="card mt-2">
                        <div class="card-header text-center">
                            <h3>
                                {{ $dish->name }}
                            </h3>
                        </div>
                        <div class="card-body d-flex flex-column align-items-center">
                            <img class="w-50 mb-2" src="{{ asset('storage/' . $dish->picture) }}" alt="photo">
                            <div class="w-75 text-center rounded">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">€{{ $dish->price }}</li>
                                    <li class="list-group-item text-center">
                                        @if ($dish->visible == 1)
                                            <p class="text-success">Visible</p>
                                        @else
                                            <p class="text-danger">Not visible</p>
                                        @endif
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center gap-1">
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.dishes.edit', $dish->id) }}">Edit</a>
                                        <a class="btn btn-primary" href="{{ route('admin.dishes.show', $dish->id) }}"
                                            class="btn btn-primary">Details</a>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <form id="deleteForm" class="delete-btn" style="display:inline-block" method="POST"
                                            action="{{ route('admin.dishes.destroy', $dish->id) }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="form-control btn btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="modal" tabindex="-1" id="deleteModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sei sicuro di voler eliminare questo elemento?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="button" id="confirmDelete" class="btn btn-primary">Conferma</button>
                    </div>
                </div>
            </div>
        </div>

        @php

            function readMore($description, $chars = 100)
            {
                $description = substr($description, 0, $chars);
                $description = substr($description, 0, strrpos($description, ' '));
                $description = $description . '...';
                return $description;
            }
        @endphp


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
                        object-fit: cover;
                        aspect-ratio: 1/1;
                    }
                }

                .description {
                    max-height: 100px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    margin-bottom: 5px;

                }

            }
        </style>
    @endsection
