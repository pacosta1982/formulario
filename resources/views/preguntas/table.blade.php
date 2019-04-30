<table class="table table-responsive" id="preguntas-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Pregunta Cat Id</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($preguntas as $pregunta)
        <tr>
            <td>{!! $pregunta->name !!}</td>
            <td>{!! $pregunta->pregunta_cat_id !!}</td>
            <td>
                {!! Form::open(['route' => ['preguntas.destroy', $pregunta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('preguntas.show', [$pregunta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('preguntas.edit', [$pregunta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>