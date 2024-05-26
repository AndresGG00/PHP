<?php
    include "Conexion.php";
    include "Metodos.php";

    $conexion = new Conexion();
    $conexion->conecta();

    $metodos = new Metodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Regalo bebidas</title>
</head>
<body>
    <form action="entregaPremios.php" method="POST">
        <label for="seleccionarDept">Selecciona un departamento:</label>
        <select name="seleccionarDept" id="seleccionarDept">
            <?php
                $sql = $conexion->consulta("SELECT DISTINCT DEPTO FROM datemp");
                $metodos->obtenerDepartamento($sql);
            ?>
        </select>
        <input type="submit" name="send" id="send" value="Seleccionar">
    </form>
</body>
</html>

<?php
    $conexion->desconecta();
?>