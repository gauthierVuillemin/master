<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pokemon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<header>
		
		<div id="logo">
			<img src="img/logo.png">
		</div>
	</header>

	<?php
	include('menu.php');
	?>

	<div id="block_page">
		<table>
			<thead>
				<tr>
					<th>nom</th>
					<th>numero</th>
					<th>type</th>
					<th>image</th>
				</tr>

			</thead>
			<tbody id ="tBody">
				<?php
					include('pokemon_script.php')
				?>
			</tbody>
			<img src="">
		</table>
	</div>
	<footer>
		<h3>Me contacter</h3>
		<div id="info">
			<p>Vuillemin Gauthier</p>
			<p><a href="mailto:gau.vui97@hotmail.com">Envoyez-moi un e-mail !</a></p>
		</div>
	</footer>
	<script type="text/javascript" src = "js/pokemon.js"></script>
</body>
</html>


