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
    
     <h2>Producto</h2>
     <pre>
     <?php
     var_dump($_GET);
     
     ?>
                   <?php   // sanitiza esos valores para evitar variables hackeadas?> 
     <p><?php   echo htmlspecialchars( $_GET ['id']);?></p>
     <p><?php   echo htmlspecialchars( $_GET ['nombre']);?></p>
     </pre>    
     </div>
    </div>




  </body>
</html>
