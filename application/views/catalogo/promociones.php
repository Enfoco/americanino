<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Promociones | Catalogo</title>
	<link type="text/css" rel="stylesheet" 
	href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" />
	<style type='text/css'>
	body
	{
		padding: 11px;
	}
	</style>
</head>
<body>
	<h1>Promociones</h1> 
    <div>
		<?php if($promociones): ?>
			<?php foreach($promociones as $promocion): ?>
				<div class="alert alert-info">
				<strong><?php echo $promocion->nombre_promocion; ?></strong><br />
				<?php echo $promocion->mensaje_promocion; ?><br />
				Fecha de vencimiento: <?php echo $promocion->fecha_vencimiento; ?>
				</div>
			<?php endforeach; ?>
		<?php else: ?>
			<div class="alert alert-danger">
				No hay ninguna promoci&oacute;n activa
			</div>
		<?php endif; ?>
    </div>
</body>
</html>
