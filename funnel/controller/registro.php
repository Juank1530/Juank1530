<?php
//header("Content-Type: text/html;charset=utf-8");

if (isset($_GET['shop'])) {
    $name = $_GET['shop'];
} elseif (! $_GET) {
    header('Location: http://localhost:90/Juank1530.github.io/funnel/view/index.html');
}

?>

<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro <?php echo $name?></title>
</head>
<body>
		
	<?php if ($name == 'farma_co'): ?>

	<div class="tittle">
		<h1>FARMALISTO CO</h1>
	</div>

	<div class="form">

		<form action="" method="post">

			<p>
				<input type="text" name="producto_a_carrito" placeholder="">
				Producto a Carrito
			</p>

			<p>
				<input type="text" name="carrito_a_registro" placeholder=""> Carrito
				a Registro
			</p>

			<p>
				<input type="text" name="registro_a_datos_entrega" placeholder="">
				Registro a Datos de Entrega
			</p>

			<p>
				<input type="text" name="datos_entrega_a_formula_medica"
					placeholder=""> Datos de Entrega a Fórmula Médica
			</p>

			<p>
				<input type="text" name="formula_medica_a_Medios_Pago"
					placeholder=""> Fórmula Médica a Medios de Pago
			</p>

			<p>
				<input type="text" name="medios_pago_funnel" placeholder=""> Medios
				de Pago a Funnel
			</p>

			<p>
				<input type="text" name="total_ordenes" placeholder=""> Total
				Ordenes
			</p>

			<p>
				<input type="text" name="porcen_funnel" placeholder=""> % del Funnel
			</p>

			<p>
				<input type="date" name="fecha" step="1" min="2000-01-01"
					max="2040-12-31" value="<?php echo date("Y-m-d")?>"> Fecha
			</p>

		</form>

	</div>


	<?php elseif ($name == 'farma_mx'): ?>

	<div class="tittle">
		<h1>FARMALISTO MX</h1>
	</div>

	<div class="form">

		<form action="" method="post">

			<p>
				<input type="text" name="producto_a_carrito" placeholder="">
				Producto a Carrito
			</p>

			<p>
				<input type="text" name="carrito_a_registro" placeholder=""> Carrito
				a Registro
			</p>

			<p>
				<input type="text" name="registro_a_datos_entrega" placeholder="">
				Registro a Datos de Entrega
			</p>

			<p>
				<input type="text" name="datos_entrega_a_formula_medica"
					placeholder=""> Datos de Entrega a Fórmula Médica
			</p>

			<p>
				<input type="text" name="formula_medica_a_Medios_Pago"
					placeholder=""> Fórmula Médica a Medios de Pago
			</p>

			<p>
				<input type="text" name="medios_pago_funnel" placeholder=""> Medios
				de Pago a Funnel
			</p>

			<p>
				<input type="text" name="total_ordenes" placeholder=""> Total
				Ordenes
			</p>

			<p>
				<input type="text" name="porcen_funnel" placeholder=""> % del Funnel
			</p>

			<p>
				<input type="date" name="fecha" step="1" min="2000-01-01"
					max="2040-12-31" value="<?php echo date("Y-m-d")?>"> Fecha
			</p>

		</form>

	<?php elseif ($name == 'cafam'): ?>

	<div class="tittle">
			<h1>CAFAM</h1>
		</div>

		<div class="form">

			<form action="" method="post">

				<p>
					<input type="text" name="producto_a_carrito" placeholder="">
					Producto a Carrito
				</p>

				<p>
					<input type="text" name="carrito_a_registro" placeholder="">
					Carrito a Registro
				</p>

				<p>
					<input type="text" name="registro_a_datos_entrega" placeholder="">
					Registro a Datos de Entrega
				</p>

				<p>
					<input type="text" name="datos_de_entrega_a_envio" placeholder="">
					Datos de Entrega a Envío
				</p>

				<p>
					<input type="text" name="envio_a_medios_de_pago" placeholder="">
					Envío a Medios de Pago
				</p>

				<p>
					<input type="text" name="medios_de_pago_a_pago" placeholder="">
					Medios de Pago a Pago
				</p>

				<p>
					<input type="text" name="medios_de_pago_a_pago" placeholder="">
					Pago a Funnel
				</p>

				<p>
					<input type="text" name="total_ordenes" placeholder=""> Total
					Ordenes
				</p>

				<p>
					<input type="text" name="porcen_funnel" placeholder=""> % del
					Funnel
				</p>

				<p>
					<input type="date" name="fecha" step="1" min="2000-01-01"
						max="2040-12-31" value="<?php echo date("Y-m-d")?>"> Fecha
				</p>

			</form>

	<?php elseif ($name == 'abbott'): ?>

	<div class="tittle">
				<h1>ABBOTT</h1>
			</div>
			
					<div class="form">

			<form action="" method="post">

				<p>
					<input type="text" name="producto_a_one_checkout" placeholder="">
					Producto a One Page Checkout
				</p>

				<p>
					<input type="text" name="one_checkout_a_realizacion_pedido" placeholder="">
					Carrito a Registro
				</p>

				<p>
					<input type="text" name="total_ordenes" placeholder=""> Total
					Ordenes
				</p>

				<p>
					<input type="text" name="porcen_funnel" placeholder=""> % del
					Funnel
				</p>

				<p>
					<input type="date" name="fecha" step="1" min="2000-01-01"
						max="2040-12-31" value="<?php echo date("Y-m-d")?>"> Fecha
				</p>

			</form>

	<?php elseif ($name == 'care_co'): ?>

	<div class="tittle">
				<h1>CARE24 CO</h1>
			</div>

	<?php endif ?>



</body>
</html>
