<!DOCTYPE html>
<html>
  <head>
    <title>Ficha Recogida</title>
    <link rel="stylesheet" href="fichaRecogida.css"/>
  </head>
  <body>
    <form action="inserta.php" method="POST" enctype="multipart/form-data">
      <h1>DATOS DE LICORES</h1>
      <fieldset>
        <legend>licor</legend>
        <input type="text" name="licor" id="licor" value=""/>
      </fieldset>
      <fieldset>
        <legend>marca</legend>
        <input type="text" name="marca" value=""/>
       
      </fieldset>
      
      <input type="submit" name="send" id="send" value="ENVIAR DATOS"/>
    </form>
  </body>
</html>
