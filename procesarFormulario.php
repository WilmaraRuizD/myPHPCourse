<?php

/* Para enviar informacion desde el metodo GET y recuperarlo en el formulario */
/*  
$nombreUser=$_GET['nombre'];

Para metodo post 
$nombreUser=$_POST['nombre'];
*/


$nombreUser=$_REQUEST['nombre'];
$sexoUser=$_REQUEST['sexo'];
$edadUser=$_REQUEST['edad'];
$EstudioUser=$_REQUEST['estudio'];
$rolesUser=$_REQUEST['roles'];
$image=$_FILES['image'];
$patch=$_SERVER['DOCUMENT_ROOT'].'/mi_proyecto/imagenes'.'/'.$image['name'];

echo"<p>El nombre del usuario es :$nombreUser </p>";
echo"<p>La edad del usuario es :$edadUser </p>";
echo"<p>Los estudios del usuario es :$edadUser </p>";
echo"<p>La edad del usuario es :$sexoUser </p>";
echo"<p>Los roles del usuario es :</p>";

echo"<ul>";
foreach($rolesUser as $rol){
  echo "<li>$rol</li>";
}
echo"</ul>";
/* funcion que muestra lo que componen la imagen en su formato file */
var_dump($image);
echo"<br>";
echo"<br>";
/* URL de la imagen en pactch */

echo $patch;
/* funcion para mover archivos de rutas resive como parameto */

move_uploaded_file($image['tmp_name'],$patch);
?>