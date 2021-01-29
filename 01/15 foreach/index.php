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
        $tecnologias = array('css', 'html5','jQuery'); 
        ?>

        <h2>Lenguajes que conosco</h2>

        <ul>

          <?php foreach ($tecnologias as $tecnologia):?> {
            # code...
            <li><?php echo $tecnologia;?></li>
            <?php endforeach; ?>
          }
           

        </ul>


        <?php 
        $persona =array(
          'nombre'=> 'Josue',
          'apellido' => 'Velazquez',
          'ciudad' => 'Mexico'
        );
        ?>
        <h2>datos personales</h2>
        <ul>
          <?php foreach ($persona as $key => $val): ?>{
            <li>
            <?php   echo $val      ?>
            </li>
          <?php endforeach;  ?>
            
          }    
        
        </ul>




        </div>
    </div>




  </body>
</html>
