<?php
class Metodos {
    //Metodo para rellenar el select con la informacion de la base de datos
    public function rellenarSelect($rs) {
        while ($row = $rs->fetch_array()) {
            echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
        }
    }

    //Método para insertar una fila en la base de datos
    public function insertar
}

?>