@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Institucion  Cat
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($institucionCat, ['route' => ['institucionCats.update', $institucionCat->id], 'method' => 'patch']) !!}

                        @include('institucion__cats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection