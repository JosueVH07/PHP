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
        
        $persona = array(
          'datos' => array(
            'nombre' => 'Josue',
            'Pais' => 'Mexico',
            'profesion' => 'Desarrollador WEB'
          ),
          'lenguajes' => array(
            'front_end'=> array('css','html5','jquery', 'php'),
            'back_end'=>array('php','mysql', 'python') 
          )
        );
        ?>
        <pre>
        <?php var_dump($persona);?>
        </pre>

        <pre>
        <?php print_r($persona['lenguajes']['front_end']);?>
        </pre>
        

        </div>
    </div>




  </body>
</html>
