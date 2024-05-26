<?php
    include("Conexion.php");
    include("Metodos.php");

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
    <title>Sorteo</title>
</head>
<body>
    <h1>Ganadores del sorteo</h1>
    <table>
        <tr>
            <td>Email</td>
            <td>Nombre</td>
            <td>Color</td>
        </tr>

        <?php
            $sql1 = $conexion->consulta("SELECT * FROM sorteoinfo ORDER BY RAND() LIMIT 3");

            $contador = 0;
            while ($row = $sql1->fetch_array()) {
                $metodos->rellenarTabla($row);
                $contador++;
            }

            if ($contador > 8) {
                $metodos->botonSorteo();
            }
        ?>
    </table>
</body>
</html>

<?php
    $conexion->desconecta();
?>