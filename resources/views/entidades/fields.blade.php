<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Entidades Cat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidades_cat_id', 'Entidades Cat Id:') !!}
    {!! Form::number('entidades_cat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('entidades.index') !!}" class="btn btn-default">Cancel</a>
</div>
