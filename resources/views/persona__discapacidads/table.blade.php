<table class="table table-responsive" id="personaDiscapacidads-table">
    <thead>
        <tr>
            <th>Discapacidad Id</th>
        <th>Persona Id</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personaDiscapacidads as $personaDiscapacidad)
        <tr>
            <td>{!! $personaDiscapacidad->discapacidad_id !!}</td>
            <td>{!! $personaDiscapacidad->persona_id !!}</td>
            <td>
                {!! Form::open(['route' => ['personaDiscapacidads.destroy', $personaDiscapacidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personaDiscapacidads.show', [$personaDiscapacidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personaDiscapacidads.edit', [$personaDiscapacidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>