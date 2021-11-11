@extends('layout.base')

@section('pageContent')
<h1>Lista Fumetti</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Titolo</th>
        <th scope="col">prezzo</th>
        <th scope="col">serie</th>
        <th scope="col">tipologia</th>
        <th scope="col">immagine</th>
        <th scope="col">data di uscita</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Visualizza</th>




      </tr>
    </thead>
    <tbody>
      
 @foreach ($books as $book)
     
    <tr>
    <th scope="row">{{$book["id"]}}</th>
        <td>{{$book["title"]}}</td>
        <td>{{$book["prezzo"]}}</td>
        <td>{{$book["series"]}}</td>
        <td>{{$book["type"]}}</td>
        <td><img src="{{$book["thumb"]}}" alt=""></td>
        <td>{{$book["sale_date"]}}</td>
        <td>{{$book["description"]}}</td>
        <td>
            <a href=" {{route("books.show", $book["id"])}}">
                <button type="button" class="btn btn-primary">Visualizza</button>
            </a>
            <a href="{{route("books.edit", $book["id"])}}">

              <button type="button" class="btn btn-warning">Modifica</button>
            </a>
            <form onsubmit="return confirm('Sei sicuro di voler eliminare?')"  action="{{route("books.destroy",$book["id"])}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger" >Elimina</button>
            </form>

        </td> 

 </tr> 
 @endforeach

    </tbody>
  </table>
    
@endsection