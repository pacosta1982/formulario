<div class="row">
    <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                <p>{!! $persona->nombre !!} {!! $persona->apellido !!}</p>
            </div>
    </div>
    <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('ci', 'Documento') !!}
                <p>{!! $persona->ci !!}</p>
            </div>
    </div>
    <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                <p>{!! $persona->email !!}</p>
            </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('sexo', 'Sexo') !!}
            <p>{!! $persona->sexo !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('fecha_nac', 'Fecha de Nacimiento') !!}
            <p>{!! date('d/m/Y', strtotime($persona->fecha_nac)) !!}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('celular', 'Celular') !!}
            <p>{!! $persona->celular !!}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('ingreso', 'Ingreso:') !!}
            <p>{!! number_format($persona->ingreso,0,'.','.') !!}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('discapacidad', 'Discapacidad:') !!}
            <p>{!! $persona->discapacidad !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('domicilio_actual', 'Domicilio Actual:') !!}
            <p>{!! $persona->domicilio_actual !!}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('departamento', 'Departamento:') !!}
            <p>{!! $persona->departamento !!}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('ciudad', 'Ciudad:') !!}
            <p>{!! $persona->ciudad !!}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('barrio', 'Barrio:') !!}
            <p>{!! $persona->barrio !!}</p>
        </div>
    </div>
</div>



<!-- Domicilio Actual Field -->


<!-- Departamento Field -->


<!-- Ciudad Field -->


<!-- Barrio Field -->


<!-- Ingreso Field -->


<!-- Discapacidad Field -->


