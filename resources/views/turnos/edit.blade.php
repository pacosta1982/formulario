@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Turno
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($turno, ['route' => ['turnos.update', $turno->id], 'method' => 'patch']) !!}

                        @include('turnos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection