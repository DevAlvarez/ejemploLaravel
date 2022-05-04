@extends('dashboard.layout')

@section('content')

    <a href="{{ route('post.create')}}">Crear</a>
    
    <table>
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
                        <a href="{{ route('post.show', $p)}}">Ver</a>
                        <a href="{{ route('post.edit', $p)}}">Editar</a>
                        <form action="{{ route('post.destroy', $p)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
                              
            @endforeach

        </tbody>
    </table>

    {{$posts->links()}}
@endsection