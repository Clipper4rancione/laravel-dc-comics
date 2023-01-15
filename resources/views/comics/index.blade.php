@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-2">Software gestionale DC</h2>
        <div class="container">
            <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un nuovo fumetto</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>€ {{ $comic->price }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-success" title="show"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="fa-solid fa-trash" title="delete"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h2>Nessun risultato trovato.</h2>
                @endforelse

            </tbody>
        </table>

        {{ $comics->links() }}

    </div>
@endsection
