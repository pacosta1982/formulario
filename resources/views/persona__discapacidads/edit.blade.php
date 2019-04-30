@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Persona  Discapacidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personaDiscapacidad, ['route' => ['personaDiscapacidads.update', $personaDiscapacidad->id], 'method' => 'patch']) !!}

                        @include('persona__discapacidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection