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
        $tecnologias=array('css', 'html5','jQuery');

        $existe = in_array('html5',$tecnologias);

        
        ?>
        <pre>
        <?php var_dump($existe);?>
        
        </pre>
        

        </div>
    </div>




  </body>
</html>
