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
     $primer_lenguaje = array ('java', 'phyton', 'php0');?> 

     <?php    $i =0;?>
     <?php while($i <= count($primer_lenguaje)){
      if (count ($primer_lenguaje)> 0) {
       echo $primer_lenguaje[$i].'</br>';
       if ($i+1 ===count($primer_lenguaje)) {
         # code...
         echo "fin";
       }
      } else{
        echo "no hubo resultado";
      }
      $i++;
     }?>
     </div>
    </div>




  </body>
</html>
