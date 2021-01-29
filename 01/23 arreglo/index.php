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
    
     <h2>Agenda telefonica</h2>
     <?php    
     $agenda =array();
     function guardarUsuario($nom, $tel){
       global $agenda;
       $agenda[]=array($nom, $tel);
     }



     
     guardarUsuario("Josue", "12345");
     guardarUsuario("Orlando", "552482");
     guardarUsuario("Velazquez", "9985146");


     function mostrarUsuario($id){
       global $agenda;
       $usuario = $agenda[$id];
       foreach($usuario as $user){
         echo $user.'</br>';
       }
     }
     echo"<pre>";
     var_dump($agenda);
     echo"</pre>";

     mostrarUsuario(1);
     
     ?>
     </div>
    </div>




  </body>
</html>
