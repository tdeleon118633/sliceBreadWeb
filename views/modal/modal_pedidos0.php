<?php

if (isset($_POST['contentCombo'])) {

		$tiempo_comida = isset($_POST["tiempo_comida"]) ? $_POST["tiempo_comida"] : 0;
		$link = mysql_connect('localhost', 'root', '')
			or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db('slicebread_db') or die('No se pudo seleccionar la base de datos');

		$query="SELECT cp.id_combo
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

 ?>
