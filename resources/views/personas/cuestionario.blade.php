<table class="table table-responsive" id="personas-table">
    <thead>
        <tr>
        <th>Pregunta</th>
        <th style="text-align:center">Respuesta</th>
        <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
            @foreach($cuestionario as $q)
            <tr>
                <td>{{$q->pregunta_id?$q->pregunta->name:""}}</td>
                @if ($q->value == 't')
                    <td style="color:green;text-align:center"> <i class="fa fa-check-circle"></i> Si</td>
                @else
                    <td style="color:red;text-align:center"> <i class="fa fa-close"></i> No</td>
                @endif

                @if ($q->pregunta_id == '11')
                    <td>{{$q->text_value?$q->entidad->name:""}}</td>
                @else
                    <td>{{$q->text_value}}</td>
                @endif
                
                
            </tr>
        @endforeach
        </tbody>
    </table>