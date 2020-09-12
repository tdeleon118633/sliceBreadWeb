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
     				WHERE cp.id_tiempo_comida =  {$tiempo_comida}
						GROUP BY cp.id_combo ";
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
					<td align="center" style="width: 30px">Unidades</td>
					<td align="center" style="width: 30px">Cantidad</td>
				</tr>
			</thead>
			<tbody>
				<?php



				$query2 ="SELECT cp.id_combo
                       ,c.nombre
                       ,p.id_producto
                       ,p.nombre nombre_producto
											 ,p.id_extras
											 ,cp.cantidad
											 ,cp.precio_total
						    FROM   combo_producto cp
     					         INNER JOIN combo c
     			 						     ON c.id_combo = cp.id_combo
                       INNER JOIN producto p
                           ON  p.id_producto = cp.id_producto
								WHERE cp.id_tiempo_comida =  {$tiempo_comida}
								AND cp.id_combo = {$IdCombo}";
				$result2 = mysql_query($query2);

			  $query = " SELECT id_producto, nombre FROM producto WHERE id_extras = 1 ";
			  $result3 = mysql_query($query);
					$intSumaTotal = 0;
					$intSumaU = 0;
					while (($fila = mysql_fetch_array($result2)) != NULL) {
						?>
						<tr>
							<?php
							 if( $fila["id_extras"]  == 1  ){
									?>
									<td>
										<select class="form-control" required="" id="idExtras"  name="idExtras" >
											<option value="0">Seleccione:</option>
											<?php
											while (($fila2 = mysql_fetch_array($result3)) != NULL) {
														?>
														<option value="<?php print $fila2["id_producto"] ?>" <?php echo $fila['id_extras'] == 1 ? 'selected' : '' ?>  ><?php print $fila2["nombre"] ?></option>
														<?php
												}
											?>
										</select>
									</td>
									<?php
							}
							else{
							 ?>
							  <td align="center"  style="width: 50px"><?php print $fila["nombre_producto"]; ?></td>
								<?php
									}
								 ?>
								 <input type="hidden"  id="hdnPrecio_<?php print $fila["id_producto"] ?>" name="hdnPrecio_<?php print $fila["id_producto"] ?>" value="<?php print $fila["id_producto"]; ?>" >
								  <input type="hidden"  id="hdnProducto_<?php print $fila["id_producto"] ?>" name="hdnProducto_<?php print $fila["id_producto"] ?>" value="<?php print $fila["id_producto"]; ?>" >
								<td align="center" style="width: 30px" ><input  class="form-control"  id="txtCantidad_<?php print $fila["id_producto"] ?>" name="txtCantidad_<?php print $fila["id_producto"] ?>" value="<?php print $fila["cantidad"]; ?>" ></td>
								<td align="center" style="width: 30px"><input  class="form-control"  id="txtPrecio_" name="txtPrecio_" value="<?php print $fila["precio_total"]; ?>" ></td>
						</tr>
						<?php

						  $intSumaU +=  $fila["cantidad"];
							$intSumaTotal +=  $fila["precio_total"];
					}
				 ?>
			</tbody>
			<tfoot  >
				<tr>
					<td>
							&nbsp;
					</td>
					<td>
						<?php print $intSumaU ?>
						<input type="hidden"  id="txtPrecio" name="txtPrecio" value="<?php print $intSumaTotal ?>" >
					</td>
					<td>
							<?php print $intSumaTotal ?>
					</td>
				</tr>
				  <tr>
							<td colspan="3">

								 <button type="button" class="btn btn-primary" onclick="fntAgregar('<?php print $intSumaTotal ?>')" >Agregar</button>
							</td>
					</tr>
			</tfoot>
		</table>
		<?php

		mysql_free_result($result);

		// Cerrar la conexión
		mysql_close($link);
}

 ?>
