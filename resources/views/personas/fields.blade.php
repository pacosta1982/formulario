<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Documento:') !!}
    {!! Form::number('ci', isset($cedula)? $cedula :null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', isset($nombre)? $nombre :null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', isset($apellido)? $apellido :null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Sexo:') !!}
    {!! Form::text('sexo', isset($sexo)? $sexo :null, ['class' => 'form-control', 'readonly','id' => 'myTextBox']) !!}
</div>

<div class="form-group col-sm-6" id="embarazo">
    <label>Embarazo</label>
    <select class="form-control required" name="embarazo" id="embarazo">
        <option value="" >Seleccione una opción</option>
        <option value="t"
        @if($embarazo == 't')
        selected="selected"
        @endif
        >Si</option>
        <option value="f"
        @if($embarazo == 'f')
        selected="selected"
        @endif
        >No</option>
    </select>
</div>

<div class="form-group col-sm-6" id="gestacion">
    <label>Tiempo de Gestación:</label>
    <input type="text" name="gestacion" class="form-control"  value="{{isset($gestacion)? $gestacion :null}}">
</div>

<!-- Fecha Nac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nac', 'Fecha de Nacimiento:') !!}
    {!! Form::text('fecha_nac', isset($fecha)? $fecha :null, ['class' => 'form-control','id'=>'fecha_nac', 'readonly']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_nac').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })

        if($("#myTextBox").val() == 'M'){
            //alert('quemestapasando');
            $('#embarazo').attr('hidden', true);
            $('#gestacion').attr('hidden', true);
            //$('#test1').attr('disabled', true);
        }
        //});
    </script>
@endsection
<!-- Nacionalidad -->
<div class="form-group col-sm-6">
    {!! Form::label('nac', 'Nacionalidad:') !!}
    {!! Form::text('nacionalidad', isset($nac)? $nac :null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Estado Civil -->
<div class="form-group col-sm-6">
        {!! Form::label('est', 'Esatdo Civil:') !!}
        {!! Form::text('estado_civil', isset($est)? $est :null, ['class' => 'form-control', 'readonly']) !!}
    </div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio_actual', 'Domicilio Actual:') !!}
    {!! Form::text('domicilio_actual', isset($domicilio)? $domicilio :null, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->

<div class="form-group col-sm-6">
    <label>Departamento</label>
    <select class="form-control required" readonly name="departamento" id="departamento">
        <option value="11" >Central</option>
    </select>
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    <label>Ciudad</label>
    <select class="form-control required" name="ciudad" id="ciudad">
        <option value="" >Seleccione una opcion</option>
        @foreach($ciudad as $ciu)
        <option value="{{$ciu->CiuId}}"
            @if ($idciudad == $ciu->CiuId)
                selected="selected"
            @endif
        >{{$ciu->CiuNom}} </option>
        @endforeach
    </select>
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', isset($barrio)? $barrio :null, ['class' => 'form-control']) !!}
</div>

<!-- Ingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingreso', 'Ingreso:') !!}
    {!! Form::number('ingreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Discapacidad Field -->
<div class="form-group col-sm-6">
    <label>Discapacidad:</label>
    <select class="form-control required" name="discapacidad" id="discapacidad">
        <option value="" >Seleccione una opcion</option>
        @foreach($discapacidad as $us)

        <option value="{{$us->id}}"
            @if ($iddiscap == $us->id)
                selected="selected"
            @endif
        >{{$us->name}} </option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    <label>Enfermedad:</label>
    <select class="form-control required" name="enfermedad_id" id="enfermedad_id">
        <option value="" >Seleccione una opcion</option>
        @foreach($enfermedad as $en)

        <option value="{{$en->id}}"
            @if ($idenfermedad == $en->id)
                selected="selected"
            @endif
        >{{$en->name}} </option>
        @endforeach
    </select>
</div>



<div class="form-group col-sm-6">
    <label>Parentesco</label>
    <select class="form-control required" name="parentesco_id" id="parentesco_id">
        <option value="" >Seleccione una opcion</option>
        @foreach($parentesco as $us)

        <option value="{{$us->id}}"
            @if ($idparentesco == $us->id)
                selected="selected"
            @endif
        >{{$us->name}} </option>
        @endforeach
    </select>
</div>


<div class="form-group col-sm-6">
    <label>Escolaridad</label>
    <select class="form-control required" name="institucion_id" id="institucion_id">
        <option value="" >Seleccione una opción</option>
        @foreach($escolaridad as $es)
        <option value="{{$es->id}}"
            @if ($idescol == $es->id)
                selected="selected"
            @endif
        >{{$es->name}} </option>
        @endforeach
    </select>
</div>

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
