@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Datos de Inscripción
        </h1>
    </section>
    <div class="content">
            @include('flash::message')
        <div class="box box-primary">
            <div class="box-header">
                <h4>Datos Postulante</h4>
            </div>
            <div class="box-body">

                <div class="row" style="padding-left: 20px">
                    @include('personas.show_fields')
                    <a href="{!! route('personas.index') !!}" class="btn btn-default">Atras</a>
                </div>

            </div>
        </div>

        @include('personas.tabs')

    </div>
@endsection
