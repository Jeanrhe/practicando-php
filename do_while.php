<!DOCTYPE html>
<html>
    <head>
		<title>Mucho do-while</title>
	</head>
	<body>
    <?php
		$loopCond = false;
		do {
			echo "<p>El ciclo se ejecutó aún cuando la condición del ciclo era falsa.</p>";}
		while ($loopCond);
		
		
		echo "<p>Ahora el ciclo terminó de ejecutarse.</p>";
    ?>
    </body>
</html>