<?php
  header('Content-type:application/xls');
  header('Content-Disposition: attachment; filename=usuarios.xls');
  include("conexion.php");
  $sql = mysqli_query($con, "SELECT * FROM asistencia ORDER BY codigo ASC");
?>


<table order="1">
        <tr>
          <th>Código</th>
          <th>Hora Ingreso</th>
          <th>Hora Salida</th>
        </tr>
        <?php
           while($row = mysqli_fetch_assoc($sql)){
        ?>
        <tr>
          <td><?php echo $row['codigo']; ?></td>
          <td><?php echo $row['horaingreso']; ?></td>
          <td><?php echo $row['horasalida']; ?></td>
        </tr> 
        <?php
          }
        ?>
</table>