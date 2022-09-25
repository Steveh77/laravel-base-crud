@extends('layouts.main')

@section('main-section')
    <div class="container">
        <div class="row d-flex text-center">
            <div class="col text-white py-3">
                <img src="{{ $book->thumb }}" alt="">
                <h2>{{ $book->title }}</h2>
                <p>{{ $book->description }}</p>
                <h4>€ {{ $book->price }}</h4>
                <h4>{{ $book->series }}</h4>
                <h4>{{ $book->sale_date }}</h4>
                <h4>{{ $book->type }}</h4>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mx-1">Modifica</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Cancella</button>
                </form>
                <a href="{{ route('books.index') }}" class="btn btn-primary mx-1">Torna indietro</a>
            </div>
        </div>
    </div>
@endsection
