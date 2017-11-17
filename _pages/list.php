<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../_CSS/pages.css">
	<link rel="icon" href="../_images/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../_images/icon.png" type="image/x-icon" />
</head>
</head>
<body>
	<header class="head">
		<a href="home.php"><img src="../_images/logo.png" class="logoHome"></a>
		<h1 class="titlePages">Listar</h1>
		<nav class="navigation">
			<ul>
				<li>
					<a href="include.php" class="navHome">Incluir</a>
					<a href="list.php" class="navHome">Listar</a>
					<a href="alter.php" class="navHome">Alterar</a>
					<a href="delete.php" class="navHome">Excluir</a>
				</li>
			</ul>
		</nav>
	</header>

	<section class="tables-container">
		<table class="list-table">
			<thead class="list-tHead">
				<tr>	
			        <th>Codigo</th>
			        <th>Sala</th>
			        <th>Filme</th>
			        <th>Capacidade</th>
			        <th>Hora de inicio</th>			
			        <th>Data</th>
				</tr>
			</thead>

			<tbody class="list-tBody">
				<?php 
					include "../_settings/settings.php";

					$sql = "SELECT * FROM sessao";
					$result = $con->query($sql);

					$num = 0;

					if ($result->num_rows > 0) {
						while ($line = $result->fetch_assoc()) {
							$id = $line['id'];
							$sala = $line['sala'];
							$filme = $line['filme'];
							$capacidade = $line['capacidade'];
							$hora = $line['horaInicio'];
							$data =  $line['data'];

							echo "<tr>";
							echo "<td>" .$id. "</td>";
							echo "<td>" .$sala. "</td>";
							echo "<td>" .$filme. "</td>";
							echo "<td>" .$capacidade. "</td>";
							echo "<td>" .$hora. "</td>";
							echo "<td>" .$data. "</td>";
							echo "</tr>";

						$num++;	
						}

						echo "</tbody>";
						echo "</table>";

						echo "<h3 class='listados'>N de Sessões Listadas: " .$num. "</h3>";
						
					}else{
						echo "Nenhuma sessão cadastrada";
					}

					$con->close();
				 ?>
	</section>
</body>
</html>