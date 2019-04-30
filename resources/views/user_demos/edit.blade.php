@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Demo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userDemo, ['route' => ['userDemos.update', $userDemo->id], 'method' => 'patch']) !!}

                        @include('user_demos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection