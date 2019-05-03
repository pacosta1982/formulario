<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::number('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nac', 'Fecha Nac:') !!}
    {!! Form::text('fecha_nac', null, ['class' => 'form-control','id'=>'fecha_nac']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_nac').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
