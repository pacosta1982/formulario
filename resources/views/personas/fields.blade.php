<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Documento:') !!}
    {!! Form::number('ci', $cedula, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', $nombre, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', $apellido, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Sexo:') !!}
    {!! Form::text('sexo', $sexo, ['class' => 'form-control', 'readonly']) !!}
</div>
<!-- Fecha Nac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nac', 'Fecha de Nacimiento:') !!}
    {!! Form::text('fecha_nac', $fecha, ['class' => 'form-control','id'=>'fecha_nac', 'readonly']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_nac').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection
<!-- Nacionalidad -->
<div class="form-group col-sm-6">
    {!! Form::label('nac', 'Nacionalidad:') !!}
    {!! Form::email('nacionalidad', $nac, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Estado Civil -->
<div class="form-group col-sm-6">
        {!! Form::label('est', 'Esatdo Civil:') !!}
        {!! Form::email('est', $est, ['class' => 'form-control', 'readonly']) !!}
    </div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::number('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio_actual', 'Domicilio Actual:') !!}
    {!! Form::text('domicilio_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Ingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingreso', 'Ingreso:') !!}
    {!! Form::number('ingreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Discapacidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discapacidad', 'Discapacidad:') !!}
    {!! Form::text('discapacidad', null, ['class' => 'form-control']) !!}
</div>
@if(isset($parentesco))
<div class="form-group col-sm-6">
    <label>Parentesco</label>
    <select class="form-control required" name="parentesco_id" id="parentesco_id">
        <option value="" >Seleccione una opcion</option>
        @foreach($parentesco as $us)

        <option value="{{$us->id}}"
        >{{$us->name}} </option>
        @endforeach
    </select>
</div>
@endif

@if(isset($escolaridad))
<div class="form-group col-sm-6">
    <label>Escolaridad</label>
    <select class="form-control required" name="institucion_id" id="institucion_id">
        <option value="" >Seleccione una opción</option>
        @foreach($escolaridad as $es)

        <option value="{{$es->id}}"
        >{{$es->name}} </option>
        @endforeach
    </select>
</div>
@endif
<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ocupacion', 'Ocupación:') !!}
    {!! Form::text('ocupacion', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
