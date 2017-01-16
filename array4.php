<html>
  <head>
    <title>Modificar elementos</title>
  </head>
  <body>
    <p>
      <?php
        $lenguajes = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        // Escribí el código para eliminar Python acá.
        
        unset($lenguajes[3]);
        
        // Escribí el código sobre esta línea. No
        // te preocupes por el código de abajo todavía. Lo estamos
        // usando para mostrarte el nuevo array a vos.
        
        foreach($lenguajes as $leng) {
          print "<p>$leng</p>";   
        }
      ?>
    </p>
  </body>
</html>