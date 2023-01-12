@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-2">Software gestionale DC</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>

                        </td>
                    </tr>
                @empty
                    <h2>Nessun risultato trovato.</h2>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
