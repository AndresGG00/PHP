<?php
include ("Conexion.php");
include ("Metodos.php");

$conexion = new Conexion() ;
$conexion-> conectar();
$metodos = new Metodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Ejemplo</title>
</head>
<body>
    <div id="formulario">
        <form action="" method="post">
            <select name="desplegable" id="desplegable">
                <?php
                    $metodos->rellenarSelect($conexion->consulta("SELECT NOMBRE FROM PERSONAL"));
                ?>
            </select>
        </form>
    </div>

    <div id="inputs">
        <form action="" method="post">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input type="text" name="cargo" id="cargo" placeholder="Cargo">
            <input type="text" name="sueldo" id="sueldo" placeholder="Sueldo">
            <input type="submit" value="Añadir" name="añadir">
        </form>
    </div>

    <?php
        if(isset($_POST['añadir'])){
            $nombre = $_POST['nombre'];
            $cargo = $_POST['cargo'];
            $sueldo = $_POST['sueldo'];
            $conexion->consulta("INSERT INTO PERSONAL VALUES ('$nombre','$cargo','$sueldo')");
        }
    ?>
    
    <script src="script.js"></script>
</body>
</html>