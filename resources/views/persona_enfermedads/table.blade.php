<table class="table table-responsive" id="personaEnfermedads-table">
    <thead>
        <tr>
            <th>Enfermedad Id</th>
        <th>Persona Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personaEnfermedads as $personaEnfermedad)
        <tr>
            <td>{!! $personaEnfermedad->enfermedad_id !!}</td>
            <td>{!! $personaEnfermedad->persona_id !!}</td>
            <td>
                {!! Form::open(['route' => ['personaEnfermedads.destroy', $personaEnfermedad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personaEnfermedads.show', [$personaEnfermedad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personaEnfermedads.edit', [$personaEnfermedad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>