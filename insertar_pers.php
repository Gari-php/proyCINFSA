<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin t&iacute;tulo</title>
</head>

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

<body>
<div align="center">
<h1>Cargar Persona </h1>
<a href="index.php">Cancelar</a><br>

<form method="post" action="insert.php">
  <p> ingresar nombre 
    <input
type="text" name= "nombre_persona">
  </p>
    <p> ingresar apellido 
    <input
type="text" name= "apellido_persona">
  </p>
  <p> ingresar email
    <input type="text" name="email_persona">
</p>
	  <p> ingresar DNI
    <input
type="number" name= "dni_persona">
  </p>
 	  <p> ingresar Fecha Nacimiento
    <input
type="date" name= "fecha_nacimiento">
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
</div>
</body>
</html>