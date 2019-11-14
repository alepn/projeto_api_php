<?php

$idProduto = $_GET['id'];

$sql = "DELETE FROM produto WHERE id = " . $idProduto;

$result = executar_sql($conexao, $sql);

if($result === TRUE){
	echo "Produto excluído com sucesso!";
}


?>