<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <?php
    $i = 5;
    
    switch ($i) {
        case 0:
            echo '$i es 0.';
            break;
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo '$i está en algún lado entre  1 y 5.';
            break;
        case 6:
        case 7:
            echo '$i es 6 o 7.';
            break;
        default:
            echo '$i es igual o mayor que 8';
    }
    ?>
    </body>
</html>