@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Modifica piatto</h1>
        <form runat="server" action="{{ route('admin.dishes.update', $dish->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome*</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') ?? $dish->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="picture">Immagine</label>
                <input type="file" accept="image/*" class="form-control @error('picture') is-invalid @enderror"
                    id="picture" name="picture" value="{{ old('picture') ?? $dish->picture }}"
                    placeholder="Enter picture URL">
                <div id="prev_box" class=" d-none">
                    <img class=" pic-preview" id="thumb" src="#" alt="your image" />
                    <div id="erase_prev" class="btn btn-danger">remove picture</div>
                </div>
                @error('picture')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descrizione*</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3">{{ $dish->description }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredienti*</label>
                <textarea class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" id="ingredients"
                    cols="30" rows="10" placeholder="enter ingredients">
                    {{ $dish->ingredients }}
                </textarea>
                @error('ingredients')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Prezzo*</label>
                <input type="number" step=".01" class="form-control @error('price') is-invalid @enderror"
                    id="price" name="price" value="{{ old('price') ?? $dish->price }}">
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="visible">Visibilità</label>
                <select class="form-control @error('price') is-invalid @enderror" id="visible" name="visible">
                    <option value="1" {{ $dish->visible == 1 ? 'selected' : '' }}>Visibile</option>
                    <option value="0" {{ $dish->visible == 0 ? 'selected' : '' }}>Non visibile</option>
                </select>
                @error('visible')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
