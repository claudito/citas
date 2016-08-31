<!DOCTYPE HTML>
<html lang="es">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Reporte de Citas</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Reporte de Citas Año 2016'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Cantidad',
            data: [
                ['Extracción de piezas dentales', 45.0],
                ['Ortodoncia', 26.8],
                {
                    name: 'Aplicación de resinas o amalgamas',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Eliminación de caries.', 8.5],
                ['Endodoncia', 6.2],
                ['Colocación de implantes dentales', 0.7]
            ]
        }]
    });
});
		</script>
	</head>
	<body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php include('../nav.php'); ?>

<div id="container" style="height: 400px"></div>

</div>
</div>
</div>

	</body>
</html>