@extends('layouts.main')

@section('content')
       <form action="{{ route("beers.store") }}" method="POST">
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="brand">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Inserisci la marca" value="{{ old('brand') }}">
            <small id="brand" class="form-text text-muted">È un campo testuale che deve avere massimo 30 caratteri</small>
        </div>
        @error('brand')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo"  value="{{ old('type') }}">
            <small id="type" class="form-text text-muted">È un campo testuale che deve avere massimo 20 caratteri</small>
        </div>
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price"placeholder="Inserisci il prezzo"  value="{{ old('price') }}">
            <small id="price" class="form-text text-muted">È un campo numerico di massimo 6 cifre con la virgola</small>
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="cl">Centilitri</label>
            <input type="text" class="form-control" id="cl" name="cl"placeholder="Inserisci i cl"  value="{{ old('cl') }}">
            <small id="cl" class="form-text text-muted">È un campo numerico di massimo 7 cifre con la virgola</small>
        </div>
        @error('cl')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="degrees">Gradazione alcolica</label>
            <input type="text" class="form-control" id="degrees" name="degrees" placeholder="Inserisci la gradazione"  value="{{ old('degrees') }}">
            <small id="degrees" class="form-text text-muted">È un campo numerico di massimo 4 cifre con la virgola</small>
        </div>
        @error('degrees')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route("beers.index") }}" class="btn btn-dark">Indietro</a>
    </form>
@endsection