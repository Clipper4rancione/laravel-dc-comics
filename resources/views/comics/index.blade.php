@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-2">Software gestionale DC</h2>
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
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-success"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
