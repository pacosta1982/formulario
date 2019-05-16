<table class="table table-responsive" id="personas-table">
    <thead>
        <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Parentezco</th>
        <th>Sexo</th>
        {{-- <th>Fecha Nac</th>--}}
        <th>Email</th>
        <th>Celular</th>
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
            <td>{!! $persona->persona_id?$persona->persona->email:"" !!}</td>
            <td>{!! $persona->persona_id?$persona->persona->celular:"" !!}</td>
            {{--<td>{!! $persona->domicilio_actual !!}</td>
            <td>{!! $persona->departamento !!}</td>
            <td>{!! $persona->ciudad !!}</td>
            <td>{!! $persona->barrio !!}</td>
            <td>{!! $persona->ingreso !!}</td>
            <td>{!! $persona->discapacidad !!}</td>--}}
            <td>
            @if(!$persona->parentesco_id == 1)
                {!! Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
