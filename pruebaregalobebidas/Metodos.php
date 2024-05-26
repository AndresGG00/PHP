<?php
    class Metodos{
        public function obtenerDepartamento($sql){
            while ($row = $sql->fetch_array()){
                echo '<option value="' . $row[0] . '">'. $row[0] . '</option>';
            }
        }

        public function rellenarTabla($row, $rsMarca) {
            $nombre = $row['nombre'];
            $departamento = $row['depto'];
            $ausencias = $row['ausencias'];
            $botellas = $rsMarca['marca'];

            echo '<tr>
                <td class="datos">' . $nombre . '</td>
                <td class="datos">' . $departamento . '</td>
                <td class="datos">' . $ausencias . '</td>
                <td class="datos">' . $botellas . '</td>
            </tr>';
        }

        public function botonSorteo() { 
          echo '<form action="sorteo.php" method="POST" id="sorteo">
            <input type="submit" id="send" name="send" value="Sorteo"/>
          </form>';
        }
        
    }
?>    