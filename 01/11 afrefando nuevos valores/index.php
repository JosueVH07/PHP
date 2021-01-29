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
        <?php print_r($tecnologias);?>
        </pre>
  

        <?php 
        $tecnologias[] ='python';
        $tecnologias[5] ='java';
        ?>
        
        <pre>
        <?php print_r($tecnologias);?>
        </pre>
        
      <?php //borrar ultimo elemnto y guardarlo en una variable?>  
      <?php     $java = array_pop($tecnologias);?>
      <h1><?php      echo $java;?></h1>

        <pre>
        <?php print_r($tecnologias);?>
        </pre>

            <?php //quitar primer elemento del array ?>  
<?php              unset($tecnologias[0]);?>
<pre>
        <?php print_r($tecnologias);?>
        </pre>

        <?php //borrar primer elemnto y guardarlo en una variable?>  
      <?php $html = array_shift($tecnologias);  ?>
      <h1><?php   echo $html; ?></h1>
      <pre>
        <?php print_r($tecnologias);?>
        </pre>


        <?php //borrar ciertos elementos y guardar otros?>  
      <?php $array = array_splice($tecnologias, 1, 1, array('AngularJS', 'JQuewry'));  ?>
  
      <pre>
        <?php print_r($array);?>
        </pre>
        <pre>
        <?php print_r($tecnologias);?>
        </pre>



        </div>
    </div>




  </body>
</html>
