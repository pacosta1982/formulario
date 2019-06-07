@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entidades
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($entidades, ['route' => ['entidades.update', $entidades->id], 'method' => 'patch']) !!}

                        @include('entidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection