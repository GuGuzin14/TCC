<?php
	$id = new mysqli("localhost", "root", "", "site");
	
	

	if(isset($_POST['btn_cadastrar'])) {
	
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$senha = md5 ($_POST['senha']);

			$sqlUsuario = ("SELECT * FROM usuarios WHERE usu_email  = '$email'");
			$sqlUsuario = $id -> query($sqlUsuario);

			if(mysqli_num_rows($sqlUsuario) == 1) { 
				header("location:login2.html?menssage=USUARIO JÁ CADASTRADO");
			} else {
				$sql = "INSERT into usuarios (usu_email,usu_telefone,usu_senha)
			values ('$email', '$telefone', '$senha')";
			$sql = $id -> query($sql);
			header("location: login.html");
			
			}

	}	
	$sql = $id -> close();
	
	//header("location:login.html");
	
	?>