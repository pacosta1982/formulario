@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entidades Cat
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'entidadesCats.store']) !!}

                        @include('entidades_cats.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
