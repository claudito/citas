<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
<div class="row">

<div class="col-md-4">
</div>
<div class="col-md-4">


<center>
<img src="http://dentalcloud.com.mx/imagery/DentalCloud-logo-Blue.png" alt="" class="img-responsive" width="300">
</center>


<div class="panel panel-default">
<div class="panel-heading">
Reserva de Citas
</div>
<div class="panel-body">

<form action="pages/home" method="POST">


<div class="form-group">
    <div class="input-group">
      <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Usuario">
    </div>
</div>

<div class="form-group">
    <div class="input-group">
      <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
      <input type="password" class="form-control" id="exampleInputAmount" placeholder="Contraseña">
    </div>
</div>

<div class="form-group">
<button class="btn btn-primary">Iniciar Sesión</button>
</div>


</form>

</div>
</div>
</div>
</div>


</body>
</html>