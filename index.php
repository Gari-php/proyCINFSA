<?php
    $mysql= new mysqli ("localhost","root","","cinfsa") or die ("error de conexion");
    $listaPersonas = $mysql ->query("SELECT * FROM personas JOIN estados_clientes ON id_estados_clientes = rela_estados_clientes") or die ("error de sql");
?>

<html>
    <center>

    <h1>Listas de Personas</h1>
    <a href="insertar_pers.php">Agregar Persona</a>

    <table border="2" style="width: 70%;">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Dni</th>
        <th>Fecha de Nacimiento</th>
        <th>Estado de la Persona</th>
        <th>ACCIONES</th>
    </thead>
<?php
    foreach ($listaPersonas as $pers) { ?>
        <tbody>
            <td><?php echo $pers['id_personas'] ?></td>
            <td><?php echo $pers['nombre_persona'] ?></td>
            <td><?php echo $pers['apellido_persona'] ?></td>
            <td><?php echo $pers['email_persona'] ?></td>
            <td><?php echo $pers['dni_persona'] ?></td>
            <td><?php echo $pers['fecha_nacimiento'] ?></td>
            <td><?php echo $pers['estado_nombre'] ?></td>
            <td>
                <a href="update_pers.php?id=<?php echo $pers['id_personas'] ?>">actualizar</a>
            </td>

        </tbody>
<?php } 
?>
    </table>
    </center>
</html>








