<!-- Enfermedad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfermedad_id', 'Enfermedad Id:') !!}
    {!! Form::number('enfermedad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Persona Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    {!! Form::number('persona_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personaEnfermedads.index') !!}" class="btn btn-default">Cancel</a>
</div>
