<!-- Id Field -->

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $pregunta->name !!}</p>
</div>

<!-- Pregunta Cat Id Field -->
<div class="form-group">
    {!! Form::label('pregunta_cat_id', 'Categoria:') !!}
    <p>{!! $pregunta->pregunta_cat_id?$pregunta->preguntaCat->name:"" !!}</p>
</div>

