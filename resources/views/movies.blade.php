
@extends('layout.main')

@section('title' , 'Movies')

@section('content')

    <div class="container py-5">
        <h1 class="text-center">Movies</h1>

        @foreach ($movies as $movie)
            
        <div class="sc-card">
            <div>
                <h5>{{ $movie->title }}</h5>
            </div> 
            <div class="my-3">
                 <p >{{ $movie->original_title }}</p>
            </div>
            <div>
                <p>Lingua Originale : {{ $movie->nationality }}</p>
            </div>
            <div class="my-3">
                <p>{{ $movie->date }}</p>
            </div> 
            <div class="align-items-center justify-content-center d-flex ">
                <p>Voto : {{ $movie->vote }}</p>
            </div>
        </div>
        @endforeach

    </div>

@endsection
