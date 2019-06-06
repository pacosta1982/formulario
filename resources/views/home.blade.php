@extends('layouts.app')
@section('content')
<div class="content">
        <div class="row">
                <div class="col-md-12">
                        <div class="box box-default">
                          <div class="box-header with-border">
                                <h3><i class="fa fa-home"></i> <strong>BIENVENIDOS AL PROYECTO AMA-BID
                                </strong><small class="pull-right">
                                        <img src="{{asset('img/Ama.jpeg')}}" class="imagencentro" width="240" height="100">
                                   </small>
                                </h3>
                            <h3 class="box-title">Formulario de PRE-INSCRIPCIÓN</h3>
                            <br>
                            <p>Este es el primer paso para los interesados en acceder al beneficio al Aporte Estatal</p>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                                <div class="alert alert-success alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  <h4><i class="fa fa-exclamation-triangle"></i> Observaciones: </h4>
                                  -	Para concluir el proceso, deberán completarse todos los campos.<br>
                                  -	El llenado de la ficha no necesariamente implica la adjudicación del beneficio. <br>
                                  -	Debe pasar por el proceso de análisis de documentaciones de los futuros beneficiarios.                                  
                                </div>
                              </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>
            </div>
</div>
<div class="col-md-12">  
        <button type="button" class="btn btn-block btn-primary"><strong>Acceder Formulario</strong></button>
</div>
@endsection
