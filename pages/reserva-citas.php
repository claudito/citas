<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reserva de Citas</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
<?php include('../nav.php'); ?>
</div>

</div>


<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">
Crear Cita
</div>
  <div class="panel-body">
   <form class="form-horizontal">
  <div class="form-group">
    <label  class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-10">
      <select name="" id="" class="form-control">
      <option value="">[Seleccionar]</option>
      <option value="">Juan Perez</option>
      <option value="">Carlos Castillo</option>
      <option value="">Maria Perez</option>
      <option value="">Elva Castro</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Médico</label>
    <div class="col-sm-10">
    <select name="" id="" class="form-control">
      <option value="">[Seleccionar]</option>
      <option value="">Dr. Victor Paz</option>
      <option value="">Dr. Carlos Torres</option>
      <option value="">Dr. Emilio Esteban</option>
      <option value="">Dr. Elvis Prador</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Hora inicio</label>
    <div class="col-sm-10">
    <input type="time" name="" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Hora fin</label>
    <div class="col-sm-10">
    <input type="time" name="" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Fecha</label>
    <div class="col-sm-10">
    <input type="date" name="" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Detalle</label>
    <div class="col-sm-10">
    <textarea class="form-control" rows="3"></textarea>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Crear Cita</button>
    </div>
  </div>
</form>
  </div>
</div>
</div>
</div>







</div>






</body>
</html>