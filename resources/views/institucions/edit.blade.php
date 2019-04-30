@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Institucion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($institucion, ['route' => ['institucions.update', $institucion->id], 'method' => 'patch']) !!}

                        @include('institucions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection