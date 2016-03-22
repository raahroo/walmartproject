<?php
	


	require_once("conexao.php");
  


	$destinatario= $_POST['destinatario'];
	$cep= $_POST['cep'];
	$endereco= $_POST['endereco'];
	$numero= $_POST['numero'];
	$complemento= $_POST['complemento'];
	$bairro= $_POST['bairro'];
	$cidade= $_POST['cidade'];
	$estado= $_POST['estado'];
	$tipoend= $_POST['tipoend'];
	$pontoref= $_POST['pontoref'];
   

  

	
		$query = "insert into enderecos (destinatario, cep, endereco, numero, complemento, bairro, cidade, estado, tipoend, pontoref) values ('{$destinatario}',{$cep}, '{$endereco}',{$numero},'{$complemento}','{$bairro}', '{$cidade}', '{$estado}', '{$tipoend}', '{$pontoref}')";

				if(mysqli_query($conexao, $query)) {
				header("Location:enderecos.php?adicionado=true");

			 }else{

			 	echo "O endereco não foi adicionado!";
			 }


