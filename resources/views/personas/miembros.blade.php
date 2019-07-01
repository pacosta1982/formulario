<!-- <a class="btn btn-primary pull-right announce" data-toggle="modal" style="margin-top: -10px;margin-bottom: 5px" href="">Agregar Nuevo</a> -->
<table class="table table-responsive" id="personas-table">
    <thead>
        <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Parentezco</th>
        <th>Sexo</th>
        {{-- <th>Fecha Nac</th>--}}
        <th>Escolaridad</th>
        <th>Ocupación</th>
        {{-- <th>Domicilio Actual</th>
        <th>Departamento</th>
        <th>Ciudad</th>
        <th>Barrio</th>
        <th>Ingreso</th>
        <th>Discapacidad</th> --}}
        <th style="text-align:center">Edad</th>
        <th style="text-align:right">Ingreso</th>
        </tr>
    </thead>
    <tbody>
            
    @foreach($members as $link)
        <tr>
            <td>{{ number_format($link->cedula,0,'.','.') }}</td>
            <td>{{$link->nombre}}</td>
            <td>{{$link->parentesco}}</td>
            <td>{{$link->sexo}}</td>

          {{--  <td>{!! $persona->fecha_nac !!}</td>--}}
            <td>{{$link->escolaridad}}</td>
            <td>{{$link->ocupacion}}</td>
            <td style="text-align:center">{{ (date('Y') - date('Y',strtotime($link->fechanacim))) }}</td>
            <td style="text-align:right">{{number_format($link->ingreso,0,'.','.') }}</td>
            {{--<td>{!! $persona->domicilio_actual !!}</td>
            <td>{!! $persona->departamento !!}</td>
            <td>{!! $persona->ciudad !!}</td>
            <td>{!! $persona->barrio !!}</td>
            <td>{!! $persona->ingreso !!}</td>
            <td>{!! $persona->discapacidad !!}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
@section('css')
<style>

    th.dt-center, td.dt-center
    {
        text-align: center;

    }
    td.dt-center i{
        color: black;
    }


</style>


@stop
