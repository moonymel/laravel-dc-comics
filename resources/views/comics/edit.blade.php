@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>Modifica un fumetto</h2>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-2">
                    <label for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') ?? $comic->title }}" required>
                </div>
                <div class="form-group my-2">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') ?? $comic->description }}</textarea>
                </div>
                <div class="form-group my-2">
                    <label for="thumb">Immagine</label>
                    <input class="form-control" type="text" name="thumb" id="thumb" value="{{ old('thumb') ?? $comic->thumb }}" required>
                </div>
                <div class="form-group my-2">
                    <label for="price">Prezzo</label>
                    <input class="form-control" type="text" name="price" id="price" value="{{ old('price') ?? $comic->price }}"required>
                </div>
                <div class="form-group my-2">
                    <label for="series">Serie</label>
                    <input class="form-control" type="text" name="series" id="series" value="{{ old('series') ?? $comic->series }}" required>
                </div>
                <div class="form-group my-2">
                    <label for="sale_date">Data di uscita</label>
                    <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}" required>
                </div>
                <div class="form-group my-2">
                    <label for="type">Tipologia</label>
                    <select class="form-control" name="type" id="type">
                        <option value="">Seleziona il tipo</option>
                        <option value="comic book" @selected(old('type', $comic->type) == 'comic book')>Comic book</option>
                        <option value="graphic novel" @selected(old('type', $comic->type) == 'graphic novel')>Graphic novel</option>
                    </select>
                </div>
                <div class="form-group my-2">
                    <label for="artists">Artisti</label>
                    <input class="form-control" type="text" name="artists" id="artists" value="{{ old('artists') ?? $comic->artists }}" required>
                </div>
                <div class="form-group my-2">
                    <label for="writers">Scrittori</label>
                    <input class="form-control" type="text" name="writers" id="writers" value="{{ old('writers') ?? $comic->writers }}" required>
                </div>
                <div class="form-group my-2">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection