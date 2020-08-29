<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/estilos.login.css">
	<title>Login Sistema Video Club</title>
</head>

<body>

<div class="row">
	<div class="col-md-12">
    <div class="conta">
			<?php print $_SERVER['PHP_SELF']; ?>
       <h1>RESTAURANTE MIGAJA DE PAN</h1>
		<form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<hr>
	  <div class="form-group">
		 <i class="fa fa-user123"></i> <label for="usuario"><b> Nombre del Usuario</b></label>
		<input type="text" name="usuario" class="form-control" placeholder="Nombre Usuario ">
	  </div>
	  <div class="form-group">
	      <i class="fa fa-unlock-alt123"></i> <label for="password"><b> Contraseña del  Usuario</b></label>
				<input type="password" name="password" class="form-control" placeholder="Contraseña Usuario">
			<!--<input class="input100" type="password" name="clavea" id="clavea" placeholder="Enter password">-->
	  </div><br>


       <?php  if(!isset($_SESSION['usuario'])){
                 require 'btn.php'; }?>
             <?php if (!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?>
            <?php endif; ?>
            <br>
            <?php if(!empty($error)): ?>
            	<br>
                <div class="error">
                     <?php echo $error ?>
               </div>
            <?php endif; ?>
		</form>
    </div>
	</div>
</div>
</body>
</html>
