<div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Grupo Familiar</a></li>
          <li><a href="#tab_2" data-toggle="tab">Cuestionario</a></li>
          <li><a href="#tab_3" data-toggle="tab">Adjuntos</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            @include('personas.miembros')
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
            @include('personas.cuestionario')
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_3">
            @include('personas.adjuntos')
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
