@extends('plantilha')

@section('content')

    <div class="row">
        <div class="col-md-7">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Ação</th>
                </tr>
                @foreach($notas as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descricao}}</td>
                        <td>
                            <a href="{{route('editar',$item->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route ('eliminar',$item->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
            @if (session('eliminar'))
                <div class="alert alert-success mt-3">
                    {{session('eliminar')}}

                </div>
            @endif

            {{$notas->links()}}

        </div>


        <div class="col-md-5">

            <h3 class="text-center">Agregar Notas</h3>
            <form action="{{route('store')}}" method="POST" >
              @csrf
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la Nota" required>
                </div>
                @error('nombre')
                <div class="alert alert-danger">
                    El nombre es requerido

                </div>
                @enderror

                <div class="form-group">
                    <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descricao" required>
                </div>

                @error('descricao')
                <div class="alert alert-danger">
                    A descricao e requerida

                </div>
                @enderror

                <button type="submit" class="btn btn-success btn-block">Enviar Nota</button>


            </form>

            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}

                </div>
            @endif





        </div>

    </div>
@endsection
