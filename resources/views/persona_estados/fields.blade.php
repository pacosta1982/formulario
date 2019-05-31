<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Persona Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    <select class="form-control required" name="persona_id" id="persona_id">
        <option value="" >Seleccione una opción</option>
        @foreach($personas as $per)

        <option value="{{$per->id}}"
          @if ($preguntaid == $per->id)
            selected="selected"
          @endif
            >{{$per->nombre}}</option>
        @endforeach
    </select>
    
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
   <!-- {!! Form::number('estado_id', null, ['class' => 'form-control']) !!}-->
    <select class="form-control required" name="estado_id" id="estado_id">
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
    <a href="{!! route('personaEstados.index') !!}" class="btn btn-default">Cancelar</a>
</div>
