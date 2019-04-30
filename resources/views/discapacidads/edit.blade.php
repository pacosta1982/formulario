@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Discapacidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($discapacidad, ['route' => ['discapacidads.update', $discapacidad->id], 'method' => 'patch']) !!}

                        @include('discapacidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection