<?php
include './Bbdd.php';
include './Vistas.php';

$vista = new Vistas();
$db = new Bbdd();
$db->conecta();
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Selecci&oacute;n de marca</title>
    <link rel="stylesheet" href="estilos.css"/>
  </head>
  <body>
    <form action="entregaPremios.php" method="POST" id="seleccionDeptartamento">
      <select id="seleccionDept" name="seleccionDept">
        <?php
        $vista->seleccionDept($db->consulta("SELECT   DISTINCT DEPTO  FROM   datemp"));  //
        ?>
      </select>
      <input type="submit" id="send" name="send" value="SELECCIONAR"/>
    </form>
  </body>
</html>
<?php
$db->desconecta();
?>
