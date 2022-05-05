@extends('dashboard.layout')

@section('content')
    <h1>Crear Post</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">

        @include('dashboard.post._form')

    </form>
@endsection
