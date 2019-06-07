<a class="btn btn-primary pull-right announce" data-toggle="modal" style="margin-top: -10px;margin-bottom: 5px" href="">Agregar Nuevo</a>
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
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personas as $persona)
        <tr>
            <td>{!! $persona->persona_id?$persona->persona->ci:"" !!}</td>
            <td>{!! $persona->persona_id?$persona->persona->nombre:"" !!} {!! $persona->persona_id?$persona->persona->apellido:"" !!}</td>
            <td>{!! $persona->parentesco_id?$persona->parentesco->name:"" !!}</td>
            <td>{!! $persona->persona_id?$persona->persona->sexo:"" !!}</td>

          {{--  <td>{!! $persona->fecha_nac !!}</td>--}}
            <td>{!! $persona->persona_id?$persona->escolaridad->categoriaescolar->name:"" !!}</td>
            <td>{!! $persona->persona_id?$persona->persona->ocupacion:"" !!}</td>
            {{--<td>{!! $persona->domicilio_actual !!}</td>
            <td>{!! $persona->departamento !!}</td>
            <td>{!! $persona->ciudad !!}</td>
            <td>{!! $persona->barrio !!}</td>
            <td>{!! $persona->ingreso !!}</td>
            <td>{!! $persona->discapacidad !!}</td>--}}
            @if(($persona->parentesco_id?$persona->parentesco->id:"") != 1)
                <td class="dt-center">
                    <div class="dropdown">
                        <a href="#/" data-toggle="dropdown"><i class="fa fa-fw fa-list-ul"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{!! action('PersonaController@show', ['id'=>$persona->id]) !!}">Ver</a></li>
                            <li><a href="{!! action('PersonaController@edit', ['id'=>$persona->id]) !!}">Editar</a></li>
                            <li><a href="{!! action('PersonaController@destroy', ['id'=>$persona->id]) !!}">Borrar</a></li>
                        </ul>
                    </div>
                </td>
            @endif
            </td>
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
