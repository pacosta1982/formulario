<table class="table table-responsive" id="entidades-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Entidades Cat Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($entidades as $entidades)
        <tr>
            <td>{!! $entidades->name !!}</td>
            <td>{!! $entidades->entidades_cat_id !!}</td>
            <td>
                {!! Form::open(['route' => ['entidades.destroy', $entidades->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('entidades.show', [$entidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('entidades.edit', [$entidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>