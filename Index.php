<!DOCTYPE html>
<html>
<head>
	<title>Valores de Fichas de Poker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'navbar.php'; ?>
	<div class="container">
		<div class="table-container" id="fichas">
			<h2>Fichas de Poker</h2>
			<table>
				<?php include 'ficha.php';?>
			</table>
		</div>
		<div class="table-container" id="maos">
			<h2>Mãos de Poker</h2>
			<table>
				<?php include 'maosPoker.php';?>
			</table>
		</div>
		<div class="table-container" id="cartas">
			<h2>Cartas de Poker</h2>
            <p>(Ordem decrescente de poder.)</p>
			<table>
				<?php include 'poderCartas.php';?>
			</table>
		</div>
	</div>
</body>
</html>