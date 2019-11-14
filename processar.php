<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

if (isset($_POST['enviar'])) {

	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$img = $_FILES['imagem'];
	$descricao = $_POST['descricao'];

	$img_nome = $img["name"];

	$sql = "INSERT INTO produto (nome,valor,imagem,descricao) VALUES ('$nome',$valor,'$img_nome','$descricao')";

	executar_sql($conexao, $sql);

	//Mover imagem para pasta escolhida
	rename($img['tmp_name'], $caminho_img.$img_nome);	

	echo "Produto '" . $nome . "' cadastrado com sucesso!";

}

?>

<br><br>
<a href="?pg=listar">Ir para listagem de produtos</a>
