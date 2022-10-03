<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="paginacss.css">
</head>
<body>
	<center>
<h1 align="center">SALA 4</h1>
<?php 
		$numero_puertas = rand(6, 12);
		$puerta_atras = rand(0, $numero_puertas-1);
		$puerta_buena = rand(0, $numero_puertas-1);

	while ($puerta_atras==$puerta_buena) {
		$puerta_atras = rand(0, $numero_puertas-1);
		if ($puerta_atras==$puerta_buena) {
			continue;
		}
		break;
	}
	for ($i=0; $i < $numero_puertas; $i++) { 
			
			if ($i==$puerta_buena) {
				echo("<a href='ganar.php'><div></div></a>");
			}
			elseif ($i==$puerta_atras) {
				echo("<a href='sala3.php'><div></div></a>");
			}
			else{
				echo("<a href='derrota.php'><div></div></a>");
			}
		}	





	 ?>
	 </center>
</body>
</html>