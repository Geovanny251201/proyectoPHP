<!-- <ul class="nav nav-tabs" id="navId" role="tablist">
<li class="nav-item">
  <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>cursos/crear">Crear</a>
    <a class="dropdown-item" href="#tab3Id">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#tab4Id">Action</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupos</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo constant('URL');?>grupos">Consulta</a>
    <a class="dropdown-item" href="<?php echo constant('URL');?>grupos/crear">Crear</a>
    <a class="dropdown-item" href="#tab3Id">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#tab4Id">Action</a>
  </div>
</li>
<li class="nav-item" role="presentation">
  <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
</li>
<li class="nav-item" role="presentation">
  <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
</li>
</ul> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Proyecto PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Consultar</a></li>
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>cursos/crear">Crear Curso</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Estudiantes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes">Consultar</a></li>
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>estudiantes/crear">Añadir estudiante</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profesores
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Consultar</a></li>
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>cursos/crear">Añadir profesor</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Grupos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>cursos">Consultar</a></li>
            <li><a class="dropdown-item" href="<?php echo constant('URL');?>cursos/crear">Crear grupo</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
