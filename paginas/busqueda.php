<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro estudiantes</title>
	<!-- LESLIE NOEMI ARMIJO MARTÍNEZ 
	Ejercicio 4 de PHP y Mysql-->
</head>
<body>
  <h1 align="left">Ver registros</h1>
	<?php
       $conexion = mysqli_connect("localhost", "root", "", "base_de_datos1") or
          die("Problemas de conexion");
       $registros = mysqli_query($conexion, "select codigo,nombre,mail,codigo_curso
                                    from alumnos") or
          die("Problemas en el select" . mysqli_error($conexion));

       while ($reg = mysqli_fetch_array($registros)) {
           echo "Codigo:" . $reg['codigo'] . "<br>";
           echo "Nombre:" . $reg['nombre'] . "<br>";
           echo "Mail:" . $reg['mail'] . "<br>";
           echo "Curso:";
           switch ($reg['codigo_curso']){
               case 1:
                echo "PHP";
                break;
               case 2:
                echo "ASP";
                break;
               case 3:
                echo "JSP";
                break;
           }
           echo "<br>";
           echo "<hr>";
       }
       mysqli_close($conexion);

       
    ?>
    

</body>
</html>