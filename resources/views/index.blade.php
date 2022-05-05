@extends('layout.master')

@section('contenido')

@if($otra == 'Otros')
    <h2>Que es locaina Otros</h2>
@else
    <h2>...</h2>
@endif
@endsection

@foreach ($posts as $item)

<p> {{ $item }} </p>
    
@endforeach



@section('meh')

 <h1>MEEEEEEEH</h1>

 <a href="/post">Post</a><br>
 <a href="/category">Categorías</a>
 
@endsection



@section('pa')

 <p>papapapapapappapapap</p>
@endsection