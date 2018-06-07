<?php

    include_once 'header.php';

    include_once 'scripts/conexion.inc';

    $array = array();
    $total = 0;

    $stmt = $conn->query("select * from comerciosXTipo;");

    $row = $stmt->fetchAll();

    foreach ($row as $cant)
        $total += $cant[1];

    foreach ($row as $value)
        array_push($array, array("label"=> $value[0], "y"=> ($value[1]/$total)*100));

;?>

<script>
window.onload = function() {


var chart = new CanvasJS.Chart("chartContainer", {
	theme: "theme2",
	animationEnabled: true,
	title: {
		text: "Usuarios agrupados por edad"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($array, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="margin: 7% 0 0 0; height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<?php
include_once 'footer.php';

?>
