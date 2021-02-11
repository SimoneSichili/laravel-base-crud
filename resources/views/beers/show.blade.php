@extends('layouts.main')

@section('content')
    <h1 class="mt-5 mb-3">Birra: {{ $beer->brand }}</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Prezzo</th>
                <th>Cl</th>
                <th>Gradi</th>
                <th>Creato il</th>
                <th>Aggiornato il</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $beer->id }}</td>
                <td>{{ $beer->brand }}</td>
                <td>{{ $beer->type }}</td>
                <td>{{ $beer->price }}€</td>
                <td>{{ $beer->cl }}</td>
                <td>{{ $beer->degrees }}</td>
                <td>{{ $beer->created_at }}</td>
                <td>{{ $beer->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <div class="text-right">
        <a href="{{ route("beers.index") }}" class="btn btn-lg btn-dark">Indietro</a>
    </div>
@endsection