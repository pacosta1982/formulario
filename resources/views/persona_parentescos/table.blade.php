<table class="table table-responsive" id="personaParentescos-table">
    <thead>
        <tr>
            <th>Titular Id</th>
        <th>Cantidad</th>
        <th>Parentesco Id</th>
        <th>Persona Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personaParentescos as $personaParentesco)
        <tr>
            <td>{!! $personaParentesco->titular_id !!}</td>
            <td>{!! $personaParentesco->cantidad !!}</td>
            <td>{!! $personaParentesco->parentesco_id !!}</td>
            <td>{!! $personaParentesco->persona_id !!}</td>
            <td>
                {!! Form::open(['route' => ['personaParentescos.destroy', $personaParentesco->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personaParentescos.show', [$personaParentesco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personaParentescos.edit', [$personaParentesco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>