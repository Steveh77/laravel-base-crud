@extends('layouts.main')

@section('main-section')
    <div class="container">
        <a href="{{ route('books.create') }}" class="btn btn-success my-2">Aggiungi libro</a>
        <div class="row d-flex py-2 ">
            @forelse ($books as $book)
                <div class="col-2 h-2 my-2">
                    <a href="{{ route('books.show', $book) }}" class="text-decoration-none">
                        <div class="card bg-dark text-white my-2 h-100 my-1">
                            <img src="{{ $book->thumb }}" alt="{{ $book->title }}">
                            <h5>{{ $book->series }}</h5>
                            <h5>{{ $book->type }}</h5>
                        </div>
                    </a>
                </div>
            @empty
                <h2>Nessun libro disponibile</h2>
            @endforelse

        </div>
    </div>
@endsection
