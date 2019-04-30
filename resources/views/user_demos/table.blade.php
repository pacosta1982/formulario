<table class="table table-responsive" id="userDemos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userDemos as $userDemo)
        <tr>
            <td>{!! $userDemo->name !!}</td>
            <td>{!! $userDemo->email !!}</td>
            <td>{!! $userDemo->email_verified_at !!}</td>
            <td>{!! $userDemo->password !!}</td>
            <td>{!! $userDemo->remember_token !!}</td>
            <td>
                {!! Form::open(['route' => ['userDemos.destroy', $userDemo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userDemos.show', [$userDemo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userDemos.edit', [$userDemo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>