<table class="table table-responsive" id="discapacidads-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($discapacidads as $discapacidad)
        <tr>
            <td>{!! $discapacidad->name !!}</td>
            <td>
                {!! Form::open(['route' => ['discapacidads.destroy', $discapacidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('discapacidads.show', [$discapacidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('discapacidads.edit', [$discapacidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>