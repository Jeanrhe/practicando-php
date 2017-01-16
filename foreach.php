<html>
  <head>
  </head>
  <body>
    <h1>Lenguajes que podés aprender en Codecademy:</h1>
    
     
        <?php
          $lenguajes = array("JavaScript","HTML/CSS", "PHP","Python", "Ruby");
        
          foreach ($lenguajes as $lenguaje2) {
              echo "<li> $lenguaje2 </li>";
          }
        
          unset($lenguajes);
        ?>
      
    
  </body>
</html>