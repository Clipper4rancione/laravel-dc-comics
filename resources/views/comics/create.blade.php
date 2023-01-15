@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Inserire il titolo">
            </div>
            <div class="mb-3">
                <label for="inputImage" class="form-label">Copertina</label>
                <input type="text" class="form-control" name="image" id="inputImage"
                    placeholder="Inserire il link all'immagine">
            </div>
            <div class="mb-3">
                <label for="InputPrice" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="InputPrice" placeholder="Inserire il prezzo">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Decrizione</label>
                <textarea rows="3" class="form-control" name="description" id="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection
