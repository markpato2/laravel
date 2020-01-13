@extends('plantilha')

@section('content')

    <div class="row">
        <div class="col-md-7">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Roupa</th>
                    <th>Tamanho</th>
                    <th>Ação</th>
                </tr>

                @foreach($roupas as $items)
                    <tr>
                        <td>{{$items->id}}</td>
                        <td>{{$items->descricaoRoupas}}</td>
                        <td>
                            @foreach ($items->tamanhos as $tag)
                                <span class="tag">{{ $tag->descricaoTamanho }}</span>
                            @endforeach

                         </td>
                        <td>
     <a href="{{route('editar',$items->id)}}" class="btn btn-warning">Editar</a>
     <form action="{{route ('eliminar',$items->id)}}" method="POST" class="d-inline">
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



</div>


<div class="col-md-5">

<h3 class="text-center">Agregar Roupas</h3>
<form action="{{route('storeRoupa')}}" method="POST" >
@csrf

<div class="form-group">
<input type="text" name="descricaoRoupas" id="descricaoRoupas" class="form-control" placeholder="Descricao Roupa" required>
</div>

<div class="form-group">
<select class="form-control" name="tamanho_id" id="tamanho_id">
 @foreach($tamanhos as $item)
     <option value="{{$item->id}}" >{{$item->descricaoTamanho}}</option>
 @endforeach
</select>
</div>


@error('descricaoRoupas')
<div class="alert alert-danger">
A descricao da roupa e requerida

</div>
@enderror

<button type="submit" class="btn btn-success btn-block">Adicionar Roupa</button>


</form>

@if (session('agregar'))
<div class="alert alert-success mt-3">
{{session('agregar')}}

</div>
@endif





</div>

</div>
@endsection
