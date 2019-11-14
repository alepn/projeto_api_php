<?php

if($_GET['acao'] == 'remover'){
	$idProduto = $_GET['id'];

	$sql = "DELETE FROM produto WHERE id = " . $idProduto;

	$result = executar_sql($conexao, $sql);

	if($result === TRUE){
		echo "Produto excluído com sucesso!";
	}
}

?>

<h1>Listagem de Produtos</h1>

<table class="table">
	
	<tr>
		<td>id</td>
		<td>Nome</td>
		<td>Valor</td>
		<td>Descrição</td>
		<td>Imagem</td>
		<td></td>
		<td></td>
	</tr>

	<?php 		

		$sql = "SELECT * FROM produto";

		$result = executar_sql($conexao, $sql);		

		if ($result) {
		    
		    while ($row = $result->fetch_object()) {

		    	?>


				<tr>
			        <td><b><?= $row->id ?></b></td>
			        <td><?= $row->nome ?></td>
			        <td><?= $row->valor ?></td>
			        <td><?= $row->descricao ?></td>
			        <td><img width='50px' height='50px' src='<?= $caminho_img.$row->imagem ?>' /></td>
			        <td><a href="?pg=alterar&id=<?= $row->id ?>">Alterar</a></td>
			        <td><a href="?pg=listar&acao=remover&id=<?= $row->id ?>" onclick="return confirm('Desejar remover este item?');">Remover</a></td>
		        <tr>

		    	<?php

		    	// $str = "<tr>";		    	

		    	// $str .= "<td>" . $row->id . "</td>";		    	
		    	// $str .= "<td>" . $row->nome . "</td>";		    	
		    	// $str .= "<td>" . $row->valor . "</td>";		    	
		    	// $str .= "<td>" . $row->descricao . "</td>";		    	
		    	// $str .= "<td><img width='30px' height='30px' src='" . $caminho_img.$row->imagem . "' /></td>";	

		    	// $str .= "</tr>";	

		    	// echo $str;	    		    	


		        // printf ("<tr>
		        // 	<td>%s</td>
		        // 	<td>%s</td>
		        // 	<td>%s</td>
		        // 	<td>%s</td>
		        // 	<td><img width='30px' height='30px' src='%s' /></td>", 
		        // 	$row->id, 
		        // 	$row->nome, 
		        // 	$row->valor, 
		        // 	$row->descricao, 
		        // 	$caminho_img.$row->imagem);
		    }
		    
		    $result->close();
		}

	?>
	

</table>