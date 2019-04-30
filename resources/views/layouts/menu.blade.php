

<li class="{{ Request::is('parentescos*') ? 'active' : '' }}">
    <a href="{!! route('parentescos.index') !!}"><i class="fa fa-users"></i><span>Parentesco</span></a>
</li>

<li class="{{ Request::is('discapacidads*') ? 'active' : '' }}">
    <a href="{!! route('discapacidads.index') !!}"><i class="fa  fa-wheelchair"></i><span>Discapacidad</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-user"></i><span>Persona</span></a>
</li>

<li class="{{ Request::is('personaDiscapacidads*') ? 'active' : '' }}">
    <a href="{!! route('personaDiscapacidads.index') !!}"><i class="fa fa-wheelchair"></i><span>Persona  Discapacidad</span></a>
</li>

<li class="{{ Request::is('personaParentescos*') ? 'active' : '' }}">
    <a href="{!! route('personaParentescos.index') !!}"><i class="fa fa-users"></i><span>Persona  Parentesco</span></a>
</li>

<li class="{{ Request::is('institucions*') ? 'active' : '' }}">
    <a href="{!! route('institucions.index') !!}"><i class="fa fa-university"></i><span>Institucion</span></a>
</li>

<li class="{{ Request::is('turnos*') ? 'active' : '' }}">
    <a href="{!! route('turnos.index') !!}"><i class="fa fa-edit"></i><span>Turno</span></a>
</li>

<li class="{{ Request::is('semestres*') ? 'active' : '' }}">
    <a href="{!! route('semestres.index') !!}"><i class="fa fa-edit"></i><span>Semestre</span></a>
</li>

<li class="{{ Request::is('departamentos*') ? 'active' : '' }}">
    <a href="{!! route('departamentos.index') !!}"><i class="fa fa-edit"></i><span>Departamento</span></a>
</li>

<li class="{{ Request::is('personaInstitucions*') ? 'active' : '' }}">
    <a href="{!! route('personaInstitucions.index') !!}"><i class="fa fa-edit"></i><span>Persona  Institucion</span></a>
</li>

<li class="{{ Request::is('preguntaCats*') ? 'active' : '' }}">
    <a href="{!! route('preguntaCats.index') !!}"><i class="fa fa-list-alt"></i><span>Pregunta  Categoria</span></a>
</li>

<li class="{{ Request::is('preguntas*') ? 'active' : '' }}">
    <a href="{!! route('preguntas.index') !!}"><i class="fa fa-file-text-o"></i><span>Pregunta</span></a>
</li>

<li class="{{ Request::is('institucionCats*') ? 'active' : '' }}">
    <a href="{!! route('institucionCats.index') !!}"><i class="fa fa-graduation-cap"></i><span>Institucion  Categoria</span></a>
</li>

<li class="{{ Request::is('personaPres*') ? 'active' : '' }}">
    <a href="{!! route('personaPres.index') !!}"><i class="fa fa-edit"></i><span>Persona Pregunta</span></a>
</li>

