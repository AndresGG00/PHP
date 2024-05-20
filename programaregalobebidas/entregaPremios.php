<?php
include './Bbdd.php';
include './Vistas.php';

$vista = new Vistas();
$db = new Bbdd();
$db->conecta();
?>

<!doctype html>
<html>
  <head>
    <title>Entrega de Premios</title>
    <link rel="stylesheet" href="estilos.css"/>
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
      $rs = $db->consulta("SELECT nombre, ausencias, depto
                           FROM   datemp
                           WHERE  depto='" . $_POST['seleccionDept'] . "'");
      $rm = $db->consulta("SELECT marca, cantidad
                           FROM   datlic");

      while ($row = $rs->fetch_array())
      {
        $cont = 0;
        for ($i = 0; $i < $row['ausencias']; $i++)
        {
          $cont++;
          $rsMarca = $rm->fetch_array();

          $vista->listaPremios($row, $rsMarca);

          $db->consulta("UPDATE datlic
                         SET    cantidad='" . ( --$rsMarca['cantidad']) . "'
                         WHERE  marca='" . $rsMarca['marca'] . "'");

          if ($cont >= $rm->num_rows)
          {
            $cont = 0;
            $db->inicializaConsulta($rm);
          }
        }
      }
      ?>
    </table>
    <script src="javascript.js" type="text/javascript"></script>
  </body>
</html>
<?php
$db->desconecta();
?>