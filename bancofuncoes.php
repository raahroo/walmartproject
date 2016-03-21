<?php
	function listaEnderecos($conexao) {
		$enderecos = array();
		$resultado = mysqli_query($conexao, "select * from enderecos");



		while($endereco = mysqli_fetch_assoc($resultado)) {
			array_push($enderecos, $endereco);
		
		}

		return $enderecos;

	}




	function removeEndereco($conexao, $id) {
		$query="delete from enderecos where id = {$id}";
		return mysqli_query($conexao, $query);
	}

?>



