<table class="table table-responsive" id="personaEstados-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Persona Id</th>
        <th>Estado Id</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personaEstados as $personaEstado)
        <tr>
            <td>{!! $personaEstado->descripcion !!}</td>
            <td>{!! $personaEstado->persona_id !!}</td>
            <td>{!! $personaEstado->estado_id !!}</td>
            <td>
                {!! Form::open(['route' => ['personaEstados.destroy', $personaEstado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personaEstados.show', [$personaEstado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personaEstados.edit', [$personaEstado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>