<!DOCTYPE html>
<html>
    <head>
		<title>Tu primer ciclo while en PHP</title>
	</head>
	<body>
    <?php
	$loopCond = true;
	
	while ($loopCond== true){
		//Mostrá con Echo tu mensaje que el ciclo se está ejecutando más abajo
	echo "Entraste al while";
		$loopCond = false;
	}
	echo "<p>Y ahora saliste.</p>";
    ?>
    </body>
</html>
