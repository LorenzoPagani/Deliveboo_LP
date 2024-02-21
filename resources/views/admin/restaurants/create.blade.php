@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Create a new restaurant</h1>
        <form action="{{ route('admin.restaurants.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Restaurant name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter restaurant name">
            </div>
            <div class="form-group">
                <label for="address">Restaurant address</label>
                <input type="text" class="form-control" id="address" name="address"
                    placeholder="Enter restaurant address">
            </div>
            <div class="form-group">
                <label for="description">Restaurant description</label>
                <input type="text" class="form-control" id="description" name="description"
                    placeholder="Enter restaurant description">
            </div>
            <div class="form-group">
                <label for="vat">Restaurant VAT number</label>
                <input type="text" class="form-control" id="vat" name="vat"
                    placeholder="Enter restaurant VAT number">
            </div>
            <div class="form-group">
                <label for="types">Restaurant categories</label>
                <select multiple class="form-control" id="types" name="type[]">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
