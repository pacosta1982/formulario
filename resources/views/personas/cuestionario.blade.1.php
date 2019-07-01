<div class="box box-primary">
    <!-- /.box-header -->
    <div class="box-body">
      <form role="form"  action="/filtros" method="post">
        @csrf
        <input type="hidden" name="id" value="{!! $persona->id !!}">
        <!-- text input -->
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label style="margin-top: 9px;">Cuenta con casa propia?</label>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="q4" id="q4" value="t" >
                                Si
                            </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="q4" id="q4" value="f">
                                No
                            </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="text" name="q4_text" class="form-control" placeholder="Observaciones...">
                </div>
            </div>
        </div>

        <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label style="margin-top: 9px;">La casa donde vive, ¿cuenta con titulo de propiedad a su nombre?</label>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2">
                                    <div class="radio">
                                            <label>
                                                <input type="radio" name="q5" id="q5" value="t" >
                                                Si
                                            </label>
                                            </div>
                            </div>
                            <div class="col-md-2">
                                    <div class="radio">
                                            <label>
                                                <input type="radio" name="q5" id="q5" value="f">
                                                No
                                            </label>
                                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <input type="text" name="q5_text" class="form-control" placeholder="Ingrese Estado...">
                    </div>
                </div>
            </div>

            <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label style="margin-top: 9px;">¿Tiene los impuestos al día?</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-2">
                                <div class="radio">
                                <label>
                                    <input type="radio" name="q6" id="q6" value="t" >
                                    Si
                                </label>
                                </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="radio">
                                            <label>
                                                <input type="radio" name="q6" id="q6" value="f">
                                                No
                                            </label>
                                    </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <input type="text" name="q6_text" class="form-control" placeholder="Observaciones ...">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label style="margin-top: 9px;">Recibio alguna vez subsidio habitacional del estado</label>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-2">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="q7" id="q7" value="t" >
                                            Si
                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="q7" id="q7" value="f">
                                            No
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <input type="text" name="q7_text" class="form-control" placeholder="Especificar ...">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="margin-top: 9px;">Trabaja Actualmente?</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-2">
                                                <div class="radio">
                                                        <label>
                                                            <input type="radio" name="q8" id="q8" value="t" >
                                                            Si
                                                        </label>
                                                        </div>
                                        </div>
                                        <div class="col-md-2">
                                                <div class="radio">
                                                        <label>
                                                            <input type="radio" name="q8" id="q8" value="f">
                                                            No
                                                        </label>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <input type="text" name="q8_text" class="form-control" placeholder="Ingreso Mensual ...">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label style="margin-top: 9px;">¿Podría Contar con un Ahorro Previo?</label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-2">
                                            <div class="radio">
                                            <label>
                                                <input type="radio" name="q9" id="q9" value="t" >
                                                Si
                                            </label>
                                            </div>
                                            </div>
                                            <div class="col-md-2">
                                            <div class="radio">
                                            <label>
                                                <input type="radio" name="q9" id="q9" value="f">
                                                No
                                            </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                            <input type="text" name="q9_text" class="form-control" placeholder="Observaciones ...">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label style="margin-top: 9px;">¿Podría acceder a un Crédito?</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-2">
                                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="q10" id="q10" value="t" >
                                                    Si
                                                </label>
                                                </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="radio">
                                                            <label>
                                                                <input type="radio" name="q10" id="q10" value="f">
                                                                No
                                                            </label>
                                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <input type="text" name="q10_text" class="form-control" placeholder="Observaciones ...">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label style="margin-top: 9px;">¿Esta asociado/a a alguna Cooperativa?</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                    <div class="radio">
                                                    <label>
                                                        <input type="radio" name="q11" id="q11" value="t" >
                                                        Si
                                                    </label>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="q11" id="q11" value="f">
                                                                    No
                                                                </label>
                                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <input type="text" name="q11_text" class="form-control" placeholder="Observaciones ...">
                                            </div>
                                        </div>
                                    </div>
      </form>
    </div>
    <!-- /.box-body -->
  </div>
