@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Persona  Institucion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personaInstitucion, ['route' => ['personaInstitucions.update', $personaInstitucion->id], 'method' => 'patch']) !!}

                        @include('persona__institucions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection