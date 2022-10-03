<html>
<head>
	<title></title>
	<link rel="stylesheet" href="paginacss.css">
</head>
<body>
	<center>
	<h1 align="center">SALA 1</h1>
	<h2 align="center">Elige una puerta</h1>
	<?php 
		$numero_puertas = 2;
		$puerta_buena = rand(0, $numero_puertas-1);

		for ($i=0; $i < $numero_puertas; $i++) { 
			
			if ($i==$puerta_buena) {
				echo("<a href='sala2.php'><div></div></a>");
			}
			else{
				echo("<a href='derrota.php'><div></div></a>");
			}
		}

	 ?>
	 
</center>
</body>
</html>