@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Dettaglio fumetto</h1>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic->image }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title">€ {{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->series }}</p>
                        <p class="card-text">{{ $comic->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
