<table class="table table-responsive" id="personaInstitucions-table">
    <thead>
        <tr>
            <th>Cantidad</th>
        <th>Parentesco Id</th>
        <th>Persona Id</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personaInstitucions as $personaInstitucion)
        <tr>
            <td>{!! $personaInstitucion->cantidad !!}</td>
            <td>{!! $personaInstitucion->parentesco_id !!}</td>
            <td>{!! $personaInstitucion->persona_id !!}</td>
            <td>
                {!! Form::open(['route' => ['personaInstitucions.destroy', $personaInstitucion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personaInstitucions.show', [$personaInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personaInstitucions.edit', [$personaInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>