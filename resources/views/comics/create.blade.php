@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>Inserisci un nuovo fumetto</h2>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="form-group my-2">
                    <label for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title" required>
                </div>
                <div class="form-group my-2">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group my-2">
                    <label for="thumb">Immagine</label>
                    <input class="form-control" type="text" name="thumb" id="thumb" required>
                </div>
                <div class="form-group my-2">
                    <label for="price">Prezzo</label>
                    <input class="form-control" type="text" name="price" id="price" required>
                </div>
                <div class="form-group my-2">
                    <label for="series">Serie</label>
                    <input class="form-control" type="text" name="series" id="series" required>
                </div>
                <div class="form-group my-2">
                    <label for="sale_date">Data di uscita</label>
                    <input class="form-control" type="date" name="sale_date" id="sale_date" required>
                </div>
                <div class="form-group my-2">
                    <label for="type">Tipologia</label>
                    <select class="form-control" name="type" id="type">
                        <option value="">Seleziona il tipo</option>
                        <option value="comic book">Comic book</option>
                        <option value="graphic novel">Graphic novel</option>
                    </select>
                </div>
                <div class="form-group my-2">
                    <label for="artists">Artisti</label>
                    <input class="form-control" type="text" name="artists" id="artists" required>
                </div>
                <div class="form-group my-2">
                    <label for="writers">Scrittori</label>
                    <input class="form-control" type="text" name="writers" id="writers" required>
                </div>
                <div class="form-group my-2">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection