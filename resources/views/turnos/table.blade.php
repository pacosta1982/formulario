<table class="table table-responsive" id="turnos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($turnos as $turno)
        <tr>
            <td>{!! $turno->name !!}</td>
            <td>
                {!! Form::open(['route' => ['turnos.destroy', $turno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('turnos.show', [$turno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('turnos.edit', [$turno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>