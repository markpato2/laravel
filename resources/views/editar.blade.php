@extends('plantilha')

@section('content')

    <h3 class="text-center mb-3 pt-3">Editar la nota {{$notaActualizar->id}}</h3>

    <form action="{{route('update',$notaActualizar->id)}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$notaActualizar->nombre}}" required>
        </div>

        <div class="form-group">
            <input type="text" name="descricao" id="descricao" class="form-control" value="{{$notaActualizar->descricao}}" required>
        </div>

        <button type="submit" class="btn btn-warning btn-block">Editar Nota</button>


    </form>

    @if (session('update'))
        <div class="alert alert-success mt-3">
            {{session('update')}}

        </div>
    @endif


@endsection
