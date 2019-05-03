<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Sede Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sede', 'Sede:') !!}
    {!! Form::text('sede', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrera', 'Carrera:') !!}
    {!! Form::text('carrera', null, ['class' => 'form-control']) !!}
</div>

<!-- Duracion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duracion', 'Duracion:') !!}
    {!! Form::number('duracion', null, ['class' => 'form-control']) !!}
</div>

<!-- Curso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curso', 'Curso:') !!}
    {!! Form::text('curso', null, ['class' => 'form-control']) !!}
</div>

<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', 'Turno:') !!}
    {!! Form::text('turno', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_a', 'Nivel A:') !!}
    {!! Form::text('nivel_a', null, ['class' => 'form-control']) !!}
</div>

<!-- Persona Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    {!! Form::number('persona_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('institucions.index') !!}" class="btn btn-default">Cancelar</a>
</div>
