{{-- resources/views/pastas/index.blade.php --}}
@extends('layouts.app')


@section('main-content')



<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Numero</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Data di vendita</th>
            <th scope="col">Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->thumb }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

{{-- Se è stata usata la paginazione --}}
{{ $pastas->links('pagination::bootstrap-5') }}

<table class="table">
    ...
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            ...
            <td>
                <a href="{{ route('comics.show', $comic) }}"> Dettaglio </a>

                ...
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
