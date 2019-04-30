<table class="table table-responsive" id="institucions-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Sede</th>
        <th>Carrera</th>
        <th>Duracion</th>
        <th>Curso</th>
        <th>Turno</th>
        <th>Nivel A</th>
        <th>Persona Id</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($institucions as $institucion)
        <tr>
            <td>{!! $institucion->name !!}</td>
            <td>{!! $institucion->sede !!}</td>
            <td>{!! $institucion->carrera !!}</td>
            <td>{!! $institucion->duracion !!}</td>
            <td>{!! $institucion->curso !!}</td>
            <td>{!! $institucion->turno !!}</td>
            <td>{!! $institucion->nivel_a !!}</td>
            <td>{!! $institucion->persona_id !!}</td>
            <td>
                {!! Form::open(['route' => ['institucions.destroy', $institucion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('institucions.show', [$institucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('institucions.edit', [$institucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>