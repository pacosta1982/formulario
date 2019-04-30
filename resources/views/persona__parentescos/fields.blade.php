<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Parentesco Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentesco_id', 'Parentesco Id:') !!}
    {!! Form::number('parentesco_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Personas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personas_id', 'Personas Id:') !!}
    {!! Form::number('personas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personaParentescos.index') !!}" class="btn btn-default">Cancel</a>
</div>
