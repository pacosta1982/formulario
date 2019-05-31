<!-- Titular Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titular_id', 'Titular Id:') !!}
    {!! Form::number('titular_id', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Persona Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    {!! Form::number('persona_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personaParentescos.index') !!}" class="btn btn-default">Cancel</a>
</div>
