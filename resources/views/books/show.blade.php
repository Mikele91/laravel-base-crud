@extends('layout.base')

@section('pageContent')
<h1>{{$book["title"]}}</h1>
<img src="{{$book["thumb"]}}" alt="{{$book["title"]}}">
<p>
    TRAMA :
    {{$book["description"]}}
</p>
<div>
    {{$book["price"]}} $
</div>
<div>
    {{$book["series"]}}
</div>


    
@endsection