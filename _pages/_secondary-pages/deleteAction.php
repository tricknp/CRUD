<?php
	include "../../_settings/settings.php";
	$cod = $_GET['cod'];

	$sql="SELECT * FROM sessao WHERE id=$cod";
	$result = $con->query($sql);
	 
	    $sessao = $result->fetch_assoc();
			$sala =  $sessao['sala'];
			$filme =  $sessao['filme'];
			$capacidade =  $sessao['capacidade'];
			$hora =  $sessao['horaInicio'];
			$data =  $sessao['data'];
	
	$con->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Excluir</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../_CSS/pages.css">
	<link rel="icon" href="../../_images/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../../_images/icon.png" type="image/x-icon" />
</head>
</head>
<body>
	<header class="head">
		<a href="../home.php"><img src="../../_images/logo.png" class="logoHome"></a>
		<h1 class="titlePages">Excluir</h1>
		<nav class="navigation">
			<ul>
				<li>
					<a href="../include.php" class="navHome">Incluir</a>
					<a href="../list.php" class="navHome">Listar</a>
					<a href="../alter.php" class="navHome">Alterar</a>
					<a href="../delete.php" class="navHome">Excluir</a>
				</li>
			</ul>
		</nav>
	</header>

	<form method="POST" action="../_actions/confirmDelete.php?cod=<?=$cod?>" class="formIncluir">
			
		<h1>Excluir Sessão:</h1>
		<hr class="hrIncluir">
		
		<div class="containerIncluir">
			<p>
				<label for="sala">Sala:</label>
		   		<input type="number" id="sala" name="sala" class="inputInclude" value="<?=$sala?>" readonly>
			</p>
			<p>
				<label for="filme">Filme:</label>
		   		<input type="text" id="filme" name="filme" class="inputInclude" value="<?=$filme?>" readonly>
			</p>
			<p>
				<label for="capacidade">Capacidade:</label>
		   		<input type="number" id="capacidade" name="capacidade" class="inputInclude" value="<?=$capacidade?>" readonly>
			</p>		
			<p>
				<label for="sala">Data:</label>
		   		<input type="date" id="data" name="data" class="inputInclude" value="<?=$data?>" readonly>
			</p>
			<p>
				<label for="hora">Hora de inicio:</label>
		   		<input type="time" id="hora" name="hora" class="inputInclude" value="<?=$hora?>" readonly>
			</p>
			<input type="submit" class="btnSubmit" value="Confirmar" id="btnConfirmC">
     		<a href="../alter.php"><input type="button" class="btnCancel" value="Cancelar" id="btnCancel"></a>
		</div>	
	</form>
		
</body>
</html>