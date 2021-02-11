@extends('layouts.main')

@section('content')
    <h1 class="mt-5 mb-3">Le mie birre</h1>
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
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beers as $beer)
                <tr>
                    <td>{{ $beer->id }}</td>
                    <td>{{ $beer->brand }}</td>
                    <td>{{ $beer->type }}</td>
                    <td>{{ $beer->price }}€</td>
                    <td>{{ $beer->cl }}</td>
                    <td>{{ $beer->degrees }}</td>
                    <td>{{ $beer->created_at }}</td>
                    <td>{{ $beer->updated_at }}</td>
                    <td><a href="{{ route("beers.show", $beer->id ) }}" class="btn btn-outline-dark">MOSTRA</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <a href="{{ route("beers.create") }}" class="btn btn-lg btn-dark">Aggiungi una birra</a>
    </div>
@endsection