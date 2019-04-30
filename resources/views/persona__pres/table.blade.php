<table class="table table-responsive" id="personaPres-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Pregunta Id</th>
        <th>Persona Id</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personaPres as $personaPre)
        <tr>
            <td>{!! $personaPre->name !!}</td>
            <td>{!! $personaPre->pregunta_id !!}</td>
            <td>{!! $personaPre->persona_id !!}</td>
            <td>
                {!! Form::open(['route' => ['personaPres.destroy', $personaPre->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personaPres.show', [$personaPre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personaPres.edit', [$personaPre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>