<?php
require_once("conexao.php");
require_once("bancofuncoes.php");

$id = $_GET['id'];
removeEndereco($conexao, $id);

header("Location: enderecos.php?removido=true");

die();

