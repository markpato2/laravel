@extends('plantilha')

@section ('scriptsJs')

    <script type="text/javascript" src="{{ URL::asset('js/ajaxCiudad.js') }}"></script>
@endsection


@section('content')

    <h3 class="text-center mb-3 pt-3"> Ajax </h3>

    <form action="" method="POST" >

        @csrf
        <div class="form-group">

            <!-- Pais Dropdown -->
            Pais : <select id='sel_pais' name='sel_pais' class="form-control">
                <option value='0'>-- Select Pais --</option>

                <!-- Read Departments -->
                @foreach($paisData['data'] as $pais)
                    <option value='{{ $pais->id }}'>{{ $pais->nomePais }}</option>
                @endforeach

            </select>

        </div>

        <div class="form-group">
            Ciudad : <select id='sel_ciudad' name='sel_ciudad' class="form-control">
                <option value='0'>-- Select Ciudad --</option>
            </select>

        </div>

        <button type="submit" class="btn btn-warning btn-block">Editar Nota</button>


    </form>

    @if (session('update'))
        <div class="alert alert-success mt-3">
            {{session('update')}}

        </div>
    @endif


@endsection
