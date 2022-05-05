@extends('dashboard.layout')

@section('content')

    <a class="my-2 btn btn-success" href="{{ route('post.create')}}">Crear</a>

    <a class="my-2 btn btn-secondary" href="/dashboard/category">Categorías</a>
    
    <table class="table mb-3">
        <tr>
            <th>Título</th>
            <th>Categoría</th>
            <th>Posteado</th>
            <th>Acciones</th>
            
        </tr>
        <tbody>

            @foreach ($posts as $p)
                <tr>

                    <td> {{ $p->title }} </td>
                    <td> {{ $p->category->title }} </td>
                    <td> {{ $p->posted }}</td>
                    <td>
                        <a class="btn btn-primary mt-2" href="{{ route('post.show', $p)}}">Ver</a>
                        <a class="btn btn-primary mt-2" href="{{ route('post.edit', $p)}}">Editar</a>
                        <form action="{{ route('post.destroy', $p)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
                              
            @endforeach

        </tbody>
    </table>

    {{$posts->links()}}
@endsection