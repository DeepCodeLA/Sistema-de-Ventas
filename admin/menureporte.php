<?php session_start(); ?>
<?php if(isset($_SESSION["Usuario"])):?>
<?php require_once 'clases/clsClientes.php'; 
	$objCli=new Clientes();
	$fila=$objCli->getClientes();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema - Compras</title>
	<?php require_once 'inc/header.php'; ?>
</head>
<body>
	<?php require_once 'inc/menu-l.php'; ?>
	<script type="text/javascript">
		$("#reportes").addClass("active");					
	</script>
	<div class="container-fluid col-md-10 col-md-offset-2">
		<div class="row">
			<div>
				<div class="space"></div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table align="center" >
							<tr style="heigth:50%;">
								<td class="text-center" style="width:50%;">
									<a href="productos-mas-vendidos.php"><img src="images/icono-reportes.png" ></a><br>
									<span>Listado De Productos Mas Vendidos</span>
								</td>
								<td class="text-center" style="width:50%;">
									<a href="productos-mas-vendidos.php"><img src="images/icono-reportes.png" ></a><br>
									<span>Listado De Productos Mas Vendidos</span>
								</td>
							</tr>
							<tr style="heigth:50%;">
								<td class="text-center">
									<a href="productos-mas-vendidos.php"><img src="images/icono-reportes.png" ></a><br>
									<span>Listado De Productos Mas Vendidos</span>
								</td>
								<td class="text-center">
									<a href="productos-mas-vendidos.php"><img src="images/icono-reportes.png" ></a><br>
									<span>Listado De Productos Mas Vendidos</span>
								<td>
							</tr>
					</table>
				</div>

			</div>
		</div>
	</div>
	<?php require_once 'inc/footer.php'; ?>
</body>
</html>
<?php 
else:
	header( 'Location: ../' );
endif;
?>