<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Pregunta Cat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pregunta_cat_id', 'Categoria:') !!}
    <select class="form-control required" name="pregunta_cat_id" id="pregunta_cat_id">
        <option value="" >Seleccione una opción</option>
        @foreach($categorias as $cat)

        <option value="{{$cat->id}}"
          @if ($preguntaid == $cat->id)
            selected="selected"
          @endif
            >{{$cat->name}} </option>
        @endforeach
    </select>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('preguntas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
