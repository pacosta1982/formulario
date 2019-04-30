<table class="table table-responsive" id="personas-table">
    <thead>
        <tr>
        <th>Ci</th>
        <th>Nombre</th>
        <th>Apellido</th>
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
            <td>{!! $persona->ci !!}</td>
            <td>{!! $persona->nombre !!}</td>
            <td>{!! $persona->apellido !!}</td>
            <td>{!! $persona->sexo !!}</td>
          {{--  <td>{!! $persona->fecha_nac !!}</td>--}}
            <td>{!! $persona->email !!}</td>
            <td>{!! $persona->celular !!}</td>
            {{--<td>{!! $persona->domicilio_actual !!}</td>
            <td>{!! $persona->departamento !!}</td>
            <td>{!! $persona->ciudad !!}</td>
            <td>{!! $persona->barrio !!}</td>
            <td>{!! $persona->ingreso !!}</td>
            <td>{!! $persona->discapacidad !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>