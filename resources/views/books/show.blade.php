@extends('layouts.main')

@section('main-section')
    <div class="container">
        <div class="row d-flex text-center">
            <div class="col text-white py-3">
                <img src="{{ $book->thumb }}" alt="">
                <h2>{{ $book->title }}</h2>
                <p>{{ $book->description }}</p>
                <h4>{{ $book->price }}</h4>
                <h4>{{ $book->series }}</h4>
                <h4>{{ $book->sale_date }}</h4>
                <h4>{{ $book->type }}</h4>
            </div>

        </div>
    </div>
@endsection
