<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reserva de Citas</title>
<?php include('../enlances/principal.php'); ?>
<?php include('../enlances/datatables.php'); ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
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
Seguimiento de Citas
</div>
  <div class="panel-body">
  <div class="table-responsive">
    <table id="example" class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>Código</th>
          <th>Cliente</th>
          <th>Médico</th>
          <th>Fecha</th>
          <th>Hora Inicio</th>
          <th>Hora Fin</th>
          <th>Detalle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Juan Perez</td>
          <td>Percy Colina</td>
          <td>12/12/2016</td>
          <td>08:00 am</td>
          <td>09:00 am</td>
          <td>Extracción de Muela</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Maria Tello</td>
          <td>Dr. William Torres</td>
          <td>20/12/2016</td>
          <td>11:00 am</td>
          <td>13:00 pm</td>
          <td>Endodoncia</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>