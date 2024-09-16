<?php

$idPersona = $_GET['id'];
$mysql= new mysqli ("localhost","root","","cinfsa") or die ("error de conexion");
$listaPersonas = $mysql ->query("SELECT * FROM personas JOIN estados_clientes ON id_estados_clientes = rela_estados_clientes WHERE id_personas= $idPersona") or die ("error de sql");

foreach ($listaPersonas as $pers) {
    $nombre = $pers['nombre_persona'];
    $apellido = $pers['apellido_persona'];
    $email = $pers['email_persona'];
    $dni = $pers['dni_persona'];
    $nacimiento = $pers['fecha_nacimiento'];
    $estado = $pers['rela_estados_clientes'];
  
    if ($estado == 1) {
      $estado = 'Alta';
  } else {
      $estado = 'Baja';
  }
  }

?>


<html>

<style> 
  form{
    border: solid 3px black;
        width: 30%; /*en ancho del cuadrado*/

        padding-top: 10px;
        padding-right: 50px;
        padding-bottom: 0px;
        padding-left: 50px;

        font-weight: 600;
        /*la fuente de lo que se encuentra dentro del form*/
        position: relative;
        top: 50px;
  }
  
</style>
    <a href="index.php">Cancelar</a>
    <body>
        <center>

        <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $idPersona ?>" readonly>

        <p>
        <label id="label1" for="username"> Nombre:</label>
        <input type="text" name="nombre_persona" value="<?php echo $nombre ?>">
        </p>
        <p>
        <label id="label1" for="username"> Apellido:</label>
        <input type="text" name="apellido_persona" value="<?php echo $apellido ?>">
        </p>
        <p>
        <label id="label1" for="username"> Email:</label>
        <input type="text" name="email_persona" value="<?php echo $email ?>">
        </p>
        <p>
        <label id="label1" for="username"> DNI:</label>
        <input type="text" name="dni_persona" value="<?php echo $dni ?>">
        </p>
        <p>
        <label id="label1" for="username"> Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $nacimiento ?>">
        </p>
        <p> ingresar el estado 
       <select name = "rela_estados_clientes">
   <option value="0"> SELECCIONAR ....</option>
   <option value="1"> ALTA</option>
   <option value="2"> BAJA</option>
   </select>
</p>
    <p>
    <input type="submit" name="Submit" value="Enviar">
    </p>
        </form>
        </center>
    </body>

</html>