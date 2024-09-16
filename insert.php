<?php
$mysql= new mysqli ("localhost","root","","cinfsa") or die ("error de conexion");

$nombre=$_POST['nombre_persona'];
$apellido=$_POST['apellido_persona'];
$dni=$_POST['dni_persona'];
$email=$_POST['email_persona'];
$estado=$_POST['rela_estados_clientes'];
$nacimiento=$_POST['fecha_nacimiento'];

$mysql->query("insert into personas (nombre_persona,apellido_persona,email_persona,dni_persona,fecha_nacimiento,rela_estados_clientes)
 values ('$nombre','$apellido','$email','$dni','$nacimiento','$estado')")
 or die ("error de sql");

echo header('location: index.php');
$mysql-> close();

?>