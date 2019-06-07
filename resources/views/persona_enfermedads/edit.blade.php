@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Persona Enfermedad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personaEnfermedad, ['route' => ['personaEnfermedads.update', $personaEnfermedad->id], 'method' => 'patch']) !!}

                        @include('persona_enfermedads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection