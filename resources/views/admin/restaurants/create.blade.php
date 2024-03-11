@extends('layouts.admin')

@section('title')
Crea un nuovo Ristorante
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('admin.restaurants.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome del Ristorante</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter restaurant name">
            </div>
            <div class="form-group">
                <label for="address">Indirizzo del Ristorante</label>
                <input type="text" class="form-control" id="address" name="address"
                    placeholder="Enter restaurant address">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description"
                    placeholder="Enter restaurant description">
            </div>
            <div class="form-group">
                <label for="vat">P.IVA</label>
                <input type="text" class="form-control" id="vat" name="vat"
                    placeholder="Enter restaurant VAT number">
            </div>
            <div class="form-group">
                <label for="types">Categorie del Ristorante</label>
                <select multiple class="form-control" id="types" name="types[]">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection
