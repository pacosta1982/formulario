<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Pregunta Cat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pregunta_cat_id', 'Pregunta Cat Id:') !!}
    {!! Form::number('pregunta_cat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('preguntas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
