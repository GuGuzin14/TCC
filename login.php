<?php
	$id = new mysqli("localhost", "root", "", "site");
	
	

	if(isset($_POST['bt_login'])) {
	
	$email = $_POST['email'];
	$senha = md5 ($_POST['senha']);

			$sqlLogin = ("SELECT * FROM usuarios WHERE usu_email='$email' and usu_senha='$senha'");
			
			$sqlLogin = $id -> query($sqlLogin);

			

			if(mysqli_num_rows($sqlLogin) > 0) { 
				header("location:index2.html?menssage=Acesso com sucesso");
			} else {
			header("location:login.html?menssage=Email ou Senha incorretos.");
			
			}

	}	
	$sql = $id -> close();
	
	//header("location:login.html");
	
	?>