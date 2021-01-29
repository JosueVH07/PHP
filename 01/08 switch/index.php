<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

        <div class="contenido">
        <?php 
        $lenguaje = "Jsss";

        switch ($lenguaje) {
          case 'php':
            # code...
            echo "Backend";
            break;
          case 'Js':
            # code...
            echo "Front End y BackEnd";
            break;
          
          default:
            # code...
            echo "no valido";
            break;
        }
 
        
        ?>
        
        
              
        </div>
    </div>




  </body>
</html>
