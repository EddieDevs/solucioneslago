<?php include('include.php'); ?>

<?php
            
  require('connect_db.php');
    $id=$_GET['id'];
    $sqlw = "select * from tabla_productos where id_prod='$id'";
    $result = mysql_query($sqlw);
    while ($registro = mysql_fetch_array($result)){ ?>
      <div id="cuadro-productos">
          <table>
            <tr><td rowspan="3"><img src="productos/<?php echo $registro['imagen'];?>"></td>
            <td><p class="lead"><?php echo $registro['nombre'];?></p></td></tr>
           	<tr><td><p class="lead"><?php echo $registro['descripcion'];?></p></td></tr>
            <tr><td><p class="lead"> $ <?php echo $registro['precios'];?></p></td></tr>
          </table>
</div>
<?php }?>

