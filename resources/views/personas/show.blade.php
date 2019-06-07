@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Datos de Inscripción
        </h1>
    </section>
    <div class="content">
            @include('flash::message')
        <div class="box box-primary">
            <div class="box-header">
                <h4>Datos Postulante</h4>
            </div>
            <div class="box-body">

                <div class="row" style="padding-left: 20px">
                    @include('personas.show_fields')
                    <a href="{!! route('personas.index') !!}" class="btn btn-default">Atras</a>
                </div>

            </div>
        </div>

        @include('personas.tabs')

    </div>
    <div class="example-modal" >
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                        <h4 style="font-weight: bold;" class="modal-title">Agregar Miembro</h4>
                      </div>
                      <div class="modal-body">
                        <form action="/addmiembro" method="get">
                        <input type="text" hidden name="postulante" value="{{$persona->id}}">
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
