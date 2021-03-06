<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo PATH ?>">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo PATH ?>pages/reserva-citas">Reserva de Citas<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo PATH ?>pages/seguimiento-citas">Seguimiento de Citas</a></li>
        <li class="active"><a href="<?php echo PATH ?>pages/reporte-citas">Reportes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantemientos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Registrar Clientes</a></li>
            <li><a href="#">Registro de Empleados</a></li>
            <li><a href="#">Registro de Usuarios</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Registro de Administradores</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo PATH ?>pages/reporte-citas">Reporte Mensuales</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ingrese el Cliente">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">
        <i class="glyphicon glyphicon-user text-success"></i>
        Admnistrador</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Configuración</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Cuenta</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>