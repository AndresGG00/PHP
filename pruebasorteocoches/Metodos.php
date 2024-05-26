<?php
    class Metodos{
        public function obtenerColores($sql){
            while ($row = $sql->fetch_array()){
                echo '<option value="' . $row[0] . '">'. $row[0] . '</option>';
            }
        }

        public function rellenarTabla($row) {
            $email = $row['email'];
            $nombre = $row['nombre'];
            $color = $row['color'];
            echo '<tr>
                <td class="datos">' . $email . '</td>
                <td class="datos">' . $nombre . '</td>
                <td class="datos">' . $color . '</td>
            </tr>';
        }

        public function botonSorteo() { 
          echo '<form action="sorteo.php" method="POST" id="sorteo">
            <input type="submit" id="send" name="send" value="Sorteo"/>
          </form>';
        }
        
    }
?>    