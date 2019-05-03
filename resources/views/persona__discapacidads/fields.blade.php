<!-- Discapacidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discapacidad_id', 'Discapacidad Id:') !!}
    {!! Form::number('discapacidad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Persona Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    {!! Form::number('persona_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personaDiscapacidads.index') !!}" class="btn btn-default">Cancelar</a>
</div>
