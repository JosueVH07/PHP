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
        
        //array indexado
        //versiones nteriores
        $tecnologias = ['css', 'html', 'JS', 'jquery'];
        ?>

        <pre>
        <?php      print_r($tecnologias);   ?>
        </pre>
      
      <?php         
  echo "<br>";
        //nueva version
        $lenguajes = array('CSS', 'Jquery', 'html', 'Mysql');
        
        ?>

        <pre>  <?php  var_dump($lenguajes);       ?></pre>
       
      
        
        
              
        </div>
    </div>




  </body>
</html>
