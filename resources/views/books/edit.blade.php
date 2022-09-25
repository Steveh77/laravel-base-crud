@extends('layouts.main')

@section('main-section')
    {{-- FORM --}}
    <div class="container text-white bg-secondary my-5 rounded-2">
        <h1>Modifica Libro</h1>
        <div class="card-body">
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" placeholder="inserisci il titolo"
                                name="title" value="{{ $book->title }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Foto</label>
                            <input type="text" class="form-control" id="thumb" placeholder="inserisci il URL foto"
                                name="thumb" value="{{ $book->thumb }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="text" class="form-control" id="price" placeholder="9.99" name="price"
                                value="{{ $book->price }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie</label>
                            <input type="text" class="form-control" id="series" placeholder="inserisci la serie"
                                name="series" value="{{ $book->series }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="type" placeholder="inserisci il tipo"
                                name="type" value="{{ $book->type }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data</label>
                            <input type="text" class="form-control" id="sale_date" placeholder="YYYY-MM-GG"
                                name="sale_date" value="{{ $book->sale_date }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" placeholder="Descrizione" name="description" rows="5">{{ $book->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer pb-3 d-flex justify-content-between">
                    <a href="{{ route('books.index') }}" class="btn btn-primary">Torna indietro</a>
                    <div>
                        <button type="reset" class="btn btn-danger">Cancella</button>
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
