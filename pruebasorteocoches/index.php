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
    <title>Sorteo Coches</title>
</head>
<body>
    <h1>Sorteo Coches</h1>
    <form action="index.php" method="POST">
        <label for="condiciones">¿Acepta los términos y condiciones del sorteo?</label>
        <input type="checkbox" name="condiciones" id="condiciones" required> <br>
        <label for="seleccioncolores">Selecciona el color:</label>
        <select name="seleccioncolores" id="seleccioncolores">
            <?php
                $sql1 = $conexion->consulta("SELECT * FROM colores");
                $metodos->obtenerColores($sql1);
            ?>
        </select>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">    
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"></label>
        <input type="submit" name="send" id="send" value="Enviar">
    </form>

    <?php if($_POST) { ?>
        <h1>Participantes</h1>
        <table>
            <tr>
                <td>Email</td>
                <td>Nombre</td>
                <td>Color</td>
            </tr>

            <?php
                $email = $_POST['email'];
                $nombre = $_POST['nombre'];
                $seleccionColores = $_POST['seleccioncolores'];

                $sql2 = $conexion->consulta("SELECT email FROM sorteoinfo");
                $check = 0;
                while ($row = $sql2->fetch_array()) {
                    if(strtoupper($email) == strtoupper($row[0])){
                        echo("El correo que ha introducido ya está registrado");
                        $check = 1;
                        break; // Sale del bucle cuando encuentra un correo ya registrado
                    }
                }

                if($check == 0) { // Si no se encontró ningún correo registrado
                    $ins = $conexion->consulta("INSERT INTO sorteoinfo (email, nombre, color) VALUES ('$email', '$nombre', '$seleccionColores')");
                    $sql3 = $conexion->consulta("SELECT * FROM sorteoinfo");

                    $contador = 0;
                    while ($row = $sql3->fetch_array()) {
                        $metodos->rellenarTabla($row);
                        $contador++;
                    }
                }

                if ($contador > 7) {
                    $metodos->botonSorteo();
                }
            ?>
        </table>
    <?php } ?>    
</body>
</html>

<?php
    $conexion->desconecta();
?>
