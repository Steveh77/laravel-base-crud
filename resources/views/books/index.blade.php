@extends('layouts.main')

@section('main-section')
    <div class="container">
        <div class="row d-flex py-5 ">
            @forelse ($books as $book)
                <div class="col-2 h-2">
                    <a href="{{ route('books.show', $book) }}" class="text-decoration-none">
                        <div class="card bg-dark text-white my-2">
                            <img src="{{ $book->thumb }}" alt="{{ $book->title }}">
                            <h4>{{ $book->series }}</h4>
                            <h4>{{ $book->type }}</h4>
                        </div>
                    </a>
                </div>
            @empty
                <h2>Nessun libro disponibile</h2>
            @endforelse

        </div>
    </div>
@endsection
