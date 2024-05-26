<?php
    include ("Conexion.php");
    include ("Metodos.php");

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
    <title>Entrega de premios</title>
</head>
<body>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Departamento</td>
            <td>Ausencias</td>
            <td>Botellas</td>
        </tr>
        <?php
            $sql = $conexion->consulta("SELECT nombre, ausencias, depto FROM datemp WHERE  depto='" . $_POST['seleccionarDept'] . "'");
            $sql2 = $conexion->consulta("SELECT marca, cantidad FROM datlic");

            while ($row = $sql->fetch_array()) {
                $count = 0;
                for ($i=0; $i < $row['ausencias']; $i++) { 
                    $count++;
                    $rsMarca = $sql2->fetch_array();

                    $metodos->rellenarTabla($row, $rsMarca);

                    $update = $conexion->consulta("UPDATE datlic SET cantidad='" . (--$rsMarca['cantidad']) . "' WHERE marca='" . $rsMarca['marca'] . "'");
                    if ($count >= $sql2->num_rows) {
                      $count = 0;
                      $conexion->inicializaConsulta($sql2);
                    }
                }  
            }   
        ?>
    </table>
</body>
</html>

<?php
    $conexion->desconecta();
?>