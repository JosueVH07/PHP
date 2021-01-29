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
      <?php// var_dump($_POST);?><?php //muetra valores del metodo post?>
       <?php $resultado = $_POST;?>
       <?php $nombre = $resultado['nombre'];?>
       <?php $apellido = $resultado['apellido'];?>

       <?php 
       
       if(!(filter_has_var(INPUT_POST,'nombre') 
       && (strlen(filter_input(INPUT_POST, 'nombre')) >0))){
         echo "Debes agregar un valor";
       }else{?>
         <p>Nombre:<?php echo $resultado['nombre'];
       }?></p>

<?php
    if(!isset($apellido) || trim($apellido)!=''){?>
    <p>apellido: <?php   echo $apellido;?></p>
   <?php }else{
     echo "Apellido Obligatorio";
   }?>

   <hr>
   <?php//validar checkbox?>
 <?php 
  if(isset($_POST['notificaciones'])){
    $notificaciones = $_POST['notificaciones'];
    if($notificaciones == 'on'){
      echo "Se ah inscrito a las notificaciones";
    }
    
  }
 
 ?>
<?php//validar array de checkbox?>
<h2>Cursos</h2>
<?php

if (isset($_POST['curso'])) {
  $cursos = $_POST['curso'];
  echo "tus cursos son: </br>";
  foreach($cursos as $curso){
    echo $curso.'</br>';
  }
}else{
  echo "no seleccionaste cursos";
}
?>
<hr>
<?php//validar select?>
<?php

if(isset($_POST['area'])){
  $area = $_POST['area'];
  echo "<h2>Area de Especializacion</h2>";
  switch ($area){
    case 'fe':
      echo "Front End";
    break;
    case 'be':
      echo "Back End";
    break;
    case 'fs':
      echo "FullStack";
    break;
    default:
      echo "Selecciona un Area";
  break;
  }
}
?>
<hr>
<?php//validar radiobutton?>
<?php  $opciones = array(
                      'pres' => 'Presencial',
                      'online' => 'En Línea'
                  );?>
<h2>tipo de curso elegido</h2>
<?php

if(array_key_exists($_POST['opciones'], $opciones)){
  $tipoCurso=$_POST['opciones'];
  switch($tipoCurso){
    case 'pres':
      echo "Elegiste pressencial"; 
    break;
    case 'online':
      echo "Elegiste online";
    break;
    
  }
}else{
  echo "No seleccionaste ningun curso";
}

?>
<hr>

<?php//seguridad para formularios?>
<?php//validar textarea?>
<h2>Mensaje</h2>
<?php


if(isset($_POST['mensaje'])){
  $mensaje = $_POST['mensaje'];
  $nuevoMensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
  if(strlen($nuevoMensaje) > 0 && (trim($nuevoMensaje))){
    echo "<h2>Mensaje</h2>";
    echo $nuevoMensaje;
  }else{
    echo "el mensaje esta vacio";
  }
}
?>




    </div>




  </body>
</html>
