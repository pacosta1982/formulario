@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entidades Cat
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($entidadesCat, ['route' => ['entidadesCats.update', $entidadesCat->id], 'method' => 'patch']) !!}

                        @include('entidades_cats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection