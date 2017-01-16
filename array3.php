<html>
  <head>
    <title>Modificar elementos</title>
  </head>
  <body>
    <p>
      <?php
        $lenguajes = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        // Escribí el código para modificar
        // el arreglo $lenguajes.
        $lenguajes[1]="c";
        echo $lenguajes[1];
      ?>
    </p>
  </body>
</html> 