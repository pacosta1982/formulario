<table class="table table-responsive" id="institucionCats-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($institucionCats as $institucionCat)
        <tr>
            <td>{!! $institucionCat->name !!}</td>
            <td>
                {!! Form::open(['route' => ['institucionCats.destroy', $institucionCat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('institucionCats.show', [$institucionCat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('institucionCats.edit', [$institucionCat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>