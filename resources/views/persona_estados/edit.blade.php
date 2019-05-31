@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Persona Estado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personaEstado, ['route' => ['personaEstados.update', $personaEstado->id], 'method' => 'patch']) !!}

                        @include('persona_estados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection