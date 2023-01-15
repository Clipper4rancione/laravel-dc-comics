@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="inputTitle">
            </div>
            <div class="mb-3">
                <label for="InputPrice" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="InputPrice">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
