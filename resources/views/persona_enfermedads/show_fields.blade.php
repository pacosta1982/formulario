<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $personaEnfermedad->id !!}</p>
</div>

<!-- Enfermedad Id Field -->
<div class="form-group">
    {!! Form::label('enfermedad_id', 'Enfermedad Id:') !!}
    <p>{!! $personaEnfermedad->enfermedad_id !!}</p>
</div>

<!-- Persona Id Field -->
<div class="form-group">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    <p>{!! $personaEnfermedad->persona_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $personaEnfermedad->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $personaEnfermedad->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $personaEnfermedad->deleted_at !!}</p>
</div>

