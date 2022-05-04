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
@endsection



@section('pa')

 <p>papapapapapappapapap</p>
@endsection