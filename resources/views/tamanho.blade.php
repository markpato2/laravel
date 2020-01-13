@extends('plantilha')

@section('content')

    <div class="row">
        <div class="col-md-7">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Tamanho</th>
                    <th>Ação</th>
                </tr>
                @foreach($tamanhos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->descricaoTamanho}}</td>
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

            {{$tamanhos->links()}}

        </div>


        <div class="col-md-5">

            <h3 class="text-center">Agregar Tamanhos</h3>
            <form action="{{route('storeTamanho')}}" method="POST" >
                @csrf

                <div class="form-group">
                    <input type="text" name="descricaoTamanho" id="descricaoTamanho" class="form-control" placeholder="Descricao Tamanho" required>
                </div>

                @error('descricaoTamanho')
                <div class="alert alert-danger">
                    A descricao do tamanho e requerida

                </div>
                @enderror

                <button type="submit" class="btn btn-success btn-block">Adicionar Tamanho</button>


            </form>

            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}

                </div>
            @endif





        </div>

    </div>
@endsection
