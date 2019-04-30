<table class="table table-responsive" id="semestres-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($semestres as $semestre)
        <tr>
            <td>{!! $semestre->name !!}</td>
            <td>
                {!! Form::open(['route' => ['semestres.destroy', $semestre->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('semestres.show', [$semestre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('semestres.edit', [$semestre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>