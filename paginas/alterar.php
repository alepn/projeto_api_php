<?php

$idProduto = $_GET['id'];

if (isset($_POST['enviar'])) {


	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$img = $_FILES['imagem'];
	$descricao = $_POST['descricao'];

	$img_nome = $img["name"];	

	$sql = "UPDATE produto SET nome='$nome',valor='$valor',descricao='$descricao'";

	if ($img_nome != ''){

		$sql .= ",imagem='$img_nome'";

		//Mover imagem para pasta escolhida
		rename($img['tmp_name'], $caminho_img.$img_nome);

	}

	$sql .= " WHERE id = " . $idProduto;	

	executar_sql($conexao, $sql);

}

$sql = "SELECT * FROM produto WHERE id = " . $idProduto;

$result = executar_sql($conexao, $sql);

$produto = null;

if (!($produto = $result->fetch_object())) {

	echo "Problema ao buscar produto.";

}

?>

<h1>Formulário de Alteração</h1>

<form action="" class="form-group" method="POST" enctype="multipart/form-data">
<p>Nome: <input type="text" name="nome" value="<?= $produto->nome ?>" id="nome" class="form-control">         
</p>
<p>Valor: <input type="number" name="valor" value="<?= $produto->valor ?>" class="form-control" id="valor">
</p>
<p>Imagem: <input type="file" class="form-control" name="imagem" id="imagem">
<span><img width='100px' src="<?= $caminho_img.$produto->imagem ?>" /></span>
</p>
<p>Descrição: <textarea name="descricao" placeholder="Insira uma descrição breve do produto..." id="descricao" class="form-control" rows="5" cols="50"><?= $produto->descricao ?></textarea></p>
<p><input type="submit" name="enviar" class="btn btn-primary" value="Enviar"> <input type="reset" name="resetar" class="btn btn-danger" value="Resetar"></p>
</form>