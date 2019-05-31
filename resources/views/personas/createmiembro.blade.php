@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agregar Miembro
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['url' => '/miembros']) !!}
                        <input type="hidden" name="id" value="{{$postulante_id}}">
                        @include('personas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
