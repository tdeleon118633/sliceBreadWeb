<?php

$tiempo_comida = isset($_POST["tiempo_comida"]) ? $_POST["tiempo_comida"] : 0;
$link = mysql_connect('localhost', 'root', '')
	or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('slicebread_db') or die('No se pudo seleccionar la base de datos');


if (isset($_POST['contentCombo'])) {


		$query="SELECT  cp.id_combo
                    ,c.nombre
						 FROM combo_producto cp
     					    INNER JOIN combo c
     			 						ON c.id_combo = cp.id_combo
     				WHERE cp.id_tiempo_comida =  {$tiempo_comida} ";
		$result = mysql_query($query)
					or die("Ocurrio un error en la consulta SQL");
		mysql_close();
		echo '<option value="0">Seleccionar</option>';
		while (($fila = mysql_fetch_array($result)) != NULL) {
			echo '<option value="'.$fila["id_combo"].'">'.$fila["nombre"].'</option>';
		}
		// Liberar resultados
		mysql_free_result($result);

		// Cerrar la conexión
		mysql_close($link);
}
else if(isset($_POST["contentDetalle"])){

	$tiempo_comida = isset($_POST["tiempo_comida"]) ? $_POST["tiempo_comida"] : 0;
	$IdCombo = isset($_POST["IdCombo"]) ? $_POST["IdCombo"] : 0;

		?>
		<table class="table table-bordered"  >
			<thead  class="bg-primary">
				<tr>
					<td align="center" style="width: 50px">&nbsp;</td>
					<td align="center" style="width: 30px">Precio U</td>
					<td align="center" style="width: 30px">Cantidad</td>
				</tr>
			</thead>
			<tbody>
				<?php

				$query2 ="SELECT cp.id_combo
                       ,c.nombre
                       ,p.id_producto
                       ,p.nombre nombre_producto
											 ,cp.cantidad
											 ,cp.precio_total
						    FROM   combo_producto cp
     					         INNER JOIN combo c
     			 						     ON c.id_combo = cp.id_combo
                       INNER JOIN producto p
                           ON  p.id_producto = cp.id_producto
								WHERE cp.id_tiempo_comida =  {$tiempo_comida}
								AND cp.id_combo = {$IdCombo} ";
				$result2 = mysql_query($query2);
				mysql_close();

					while (($fila = mysql_fetch_array($result2)) != NULL) {
						?>
						<tr>
							  <td align="center"  style="width: 50px"><?php print $fila["nombre_producto"]; ?></td>
								<td align="center" style="width: 30px" ><input  class="form-control"  id="txtCantidad" name="txtCantidad" value="<?php print $fila["cantidad"]; ?>" ></td>
								<td align="center" style="width: 30px"><input  class="form-control"  id="txtPrecio" name="txtPrecio" value="<?php print $fila["precio_total"]; ?>" ></td>
						</tr>
						<?php
					}
				 ?>
			</tbody>
		</table>
		<?php

		mysql_free_result($result);

		// Cerrar la conexión
		mysql_close($link);
}

 ?>
