@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Persona Parentesco
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personaParentesco, ['route' => ['personaParentescos.update', $personaParentesco->id], 'method' => 'patch']) !!}

                        @include('persona_parentescos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection