@extends('layouts.main')

@section('main-section')
    <div class="container">
        <a href="{{ route('books.create') }}" class="btn btn-success my-2">Aggiungi libro</a>
        <div class="row d-flex py-2 ">
            @forelse ($books as $book)
                <div class="col-2 h-2 my-2 text-center">
                    <a href="{{ route('books.show', $book) }}" class="text-decoration-none">
                        <div class="card bg-dark text-white my-2 h-100 my-1">
                            <img src="{{ $book->thumb }}" alt="{{ $book->title }}">
                            <h5>{{ $book->series }}</h5>
                            <h5>{{ $book->type }}</h5>
                            <div class="m-auto d-flex justify-content-between">
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mx-1">Modifica</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Cancella</button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <h2>Nessun libro disponibile</h2>
            @endforelse

        </div>
    </div>
@endsection
