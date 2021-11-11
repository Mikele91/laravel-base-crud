@extends('layout.base')

@section('pageContent')
<h1>Modifica il fumetto {{$book["title"]}}</h1>
<form action="{{route("books.update", $book["id"])}}" method="POST">
    @csrf
    @method("PUT")
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$book["title"]}}">
        </div>
        <div class="form-group">
            <label for="thumb">Url</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci url immagine"value="{{$book["thumb"]}}">
        </div>
    
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo"value="{{$book["price"]}}">
        </div>
        <div class="form-group">
            <label for="description">Trama</label>
            <textarea name="description"class="form-control" id="description" cols="30" rows="10" placeholder="{{$book["description"]}}"></textarea>
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la saga"value="{{$book["series"]}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data diuscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita"value="{{$book["sale_date"]}}">
        </div>
        <div class="form-group">
            <label for="type">Tipo fumetto</label>
            <input type="text" class="form-control" class="type" id="type" name="type" placeholder="Inserisci tipologia" value="{{$book["type"]}}">
        </div>


    <button type="submit" class="btn btn-primary">Modifica</button>
</form>

    
@endsection