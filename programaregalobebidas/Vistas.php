<?php

class Vistas
{

  public function seleccionDept($rs)
  {

    while ($row = $rs->fetch_array())
		
    {
	
      echo '<option value="' . $row[0] . '">
                           ' . $row[0] . '</option>';
    }
  }

  public function listaPremios($row, $marca)
  {
    echo '<tr>
           <td class="mayusculas">' . $row['nombre'] . '</td>
           <td class="mayusculas">' . $row['depto'] . '</td>
           <td class="mayusculas">' . $row['ausencias'] . '</td>
           <td class="mayusculas">' . $marca['marca'] . '</td>
          </tr>';
  }

}
