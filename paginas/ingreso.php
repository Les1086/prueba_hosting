<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alta de estudiantes</title>
	<!-- LESLIE NOEMI ARMIJO MARTÍNEZ 
	Ejercicio 4 de PHP y Mysql-->
</head>
<body>
  <h1 align="center">Alta de estudiantes</h1>
	<?php
       $conexion = mysqli_connect("localhost", "root", "", "base_de_datos1") or
          die("Problemas de conexion");
       mysqli_query($conexion, "insert into alumnos(nombre,mail,codigo_curso) values 
             ('$_REQUEST[nombre]','$_REQUEST[mail]', $_REQUEST[codigo_curso])")
          or die("Problemas en el select" . mysqli_error($conexion));

       mysqli_close($conexion);

       echo "<center>El estudiante fue dado de alta</center>";

    ?>
    <br>
    <center><img src="../img/alta_usuario.jpg" width="150px" height="150px"></center>

</body>
</html>