@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Registro de Inscripción</h1>
        <h1 class="pull-right">

           <a class="btn btn-primary pull-right announce" data-toggle="modal" style="margin-top: -10px;margin-bottom: 5px" href="">Agregar Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('personas.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
    <div class="example-modal" >
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 style="font-weight: bold;" class="modal-title">Agregar Postulante</h4>
                      </div>
                      <div class="modal-body">
                        <form action="/personas/create" method="get">

                          <div class="form-group">
                            <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Ingrese Cédula">
                          </div>

                      </div>
                        <div class="modal-footer">
                        <input type="submit" class="btn " id="text_value"  value="Aceptar"/>
                      </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
        $(".announce").click(function(){ // Click to only happen on announce links
            $('#myModal').modal('show');
        });
    });
</script>
@endsection

