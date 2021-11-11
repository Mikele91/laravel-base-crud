@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo fumetto</h1>
<form action="{{route("books.store")}}"" method="POST">
    @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
        </div>
        <div class="form-group">
            <label for="thumb">Url</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci url immagine">
        </div>
    
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
        </div>
        <div class="form-group">
            <label for="description">Trama</label>
            <textarea name="description"class="form-control" id="description" cols="30" rows="10" placeholder="Trama"></textarea>
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la saga">
        </div>
        <div class="form-group">
            <label for="sale_date">Data diuscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita">
        </div>
        <div class="form-group">
            <label for="type">Tipo fumetto</label>
            <input type="text" class="form-control" class="type" id="type" name="type" placeholder="Inserisci tipologia">
        </div>


    <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
@endsection