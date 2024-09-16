<?php
$mysql= new mysqli ("localhost","root","","cinfsa") or die ("error de conexion");
$id = $_POST['id'];
$nombre = $_POST['nombre_persona'];
$apellido = $_POST['apellido_persona'];
$email = $_POST['email_persona'];
$dni = $_POST['dni_persona'];
$nacimiento = $_POST['fecha_nacimiento'];
$estado_persona = $_POST['rela_estados_clientes'];
if ($estado_persona == '1') {
     $estado = true;
} else {
     $estado = false;
}

$sqlUpdate = "UPDATE `cinfsa`.`personas`
SET
  `nombre_persona` = '$nombre',
  `apellido_persona` = '$apellido',
  `email_persona` = '$email',
  `dni_persona` = '$dni',
  `fecha_nacimiento` = '$nacimiento',
  `rela_estados_clientes` = '$estado_persona'
WHERE `id_personas` = '$id'";

$mysql->query($sqlUpdate) or die ("error de sql");


echo header('location: index.php');
$mysql->close();



?>