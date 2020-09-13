<?php $path_direccion = dirname(__FILE__); 
require 'header/menu.php';
 PRINT $path_direccion;

 //require_once $path_direccion.'/model/usuariosModel/usuariosModel.php';
 print "TEST";

$respuesta = TemplateModel::getTemplateModel('pedido');
//print_r($respuesta);

?>
<br>

<section>

		

		<div class="panel-body">
			<div class="row">
				<?php 
				foreach ($respuesta as $row) {
					print $row["key"];
				 ?>
				<div class="col-lg-4" style="border: solid 1px red"> 
			
				
					<p>
						<!--	<div class= center>   comienza centro -->
						 <!-- <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1_<?php print $row['id_producto']; ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample1_<?php print $row['id_producto']; ?>">Toggle first element</a>
						  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2_<?php print $row['id_producto']; ?>" aria-expanded="false" aria-controls="multiCollapseExample2_<?php print $row['id_producto']; ?>">Toggle second element</button> -->
						  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1_<?php print $row['id_producto']; ?> multiCollapseExample2_<?php print $row['id_producto']; ?>"><label>Pedido No. </label><?php print $row['id_pedido']; ?></button>
						</p>
						<div class="row">
						  <div class="col">
						    <div class="collapse multi-collapse" id="multiCollapseExample2_<?php print $row['nom_combo']; ?>">
						      <div class="card card-body"><?php print $row['nom_combo']; ?>
						      </div>
						    </div>
						  </div>
						  	&nbsp;
						    <div class="col">
						    <div class="collapse multi-collapse" id="multiCollapseExample2_<?php print $row['prod_combo']; ?>">
						      <div class="card card-body"><?php print $row['prod_combo']; ?>
						      </div>
						    </div>
						  </div>
						  	&nbsp;
						  	<div class="col">
						    	<div class="collapse multi-collapse" id="multiCollapseExample2_<?php print $row['cantidad']; ?>">
						      		<div class="card card-body">Cantidad: <?php print $row['cantidad']; ?>
						      		</div>
						    	</div>
						  	</div>
						  	&nbsp;
						  	<div class="col">
						    	<div class="collapse multi-collapse" id="multiCollapseExample2_<?php print $row['nom_tiempo_comida']; ?>">
						      		<div class="card card-body"><?php print $row['nom_tiempo_comida']; ?>
						      		</div>
						    	</div>
						  	</div>
						  <!--
						  <div class="col">
						    <div class="collapse multi-collapse" id="multiCollapseExample3_<?php print $row['nom_prod']; ?>">
						      <div class="card card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
						      </div>
						    </div>
						  </div>   -->

						</div>
				
					<!--	</div>   termina centro -->
			</div>
			<?php
		}
			?>
		 </div>
</div>

	

	</section>



<?php// require 'header/footer.php'; ?>

