<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pregunta->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $pregunta->name !!}</p>
</div>

<!-- Pregunta Cat Id Field -->
<div class="form-group">
    {!! Form::label('pregunta_cat_id', 'Pregunta Cat Id:') !!}
    <p>{!! $pregunta->pregunta_cat_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pregunta->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pregunta->updated_at !!}</p>
</div>

