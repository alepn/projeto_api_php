<?php

//phpinfo();

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

//Conexão com o BD
function conecta_bd($host='localhost', $usuario='admin', $senha='', $bd='banco_teste'){
	
	$mysqli = null;

	$mysqli = new mysqli($host, $usuario, $senha, $bd);

	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
	}

	return $mysqli;

}

function executar_sql($conexao, $sql){

	$result_query = $conexao->query($sql);

	return $result_query;

}

// $query = "SELECT * FROM pessoa";

// if ($result = $mysqli->query($query)) {

//     /* fetch associative array */
//     while ($row = $result->fetch_object()) {
//         printf ("%s (%s)<br>", $row->id, $row->nome);
//     }

//     /* free result set */
//     $result->close();
// }

// $query = "DELETE FROM pessoa WHERE id > 1";

// if ($mysqli->query($query) === TRUE) {
//     printf("%s pessoa(s) deletada(s) com sucesso.\n", $mysqli->affected_rows);
// }

//echo 'Success... ' . $mysqli->host_info . "\n";

// $mysqli->close();

// public function getById($id) {
//    $query = $mysqli->prepare("SELECT nome, idade, profissao, aniversario
//                                 FROM pessoas WHERE id = ?");
//    $query->bind_param('i', $id);
//    $query->execute();
//    $query->bind_result($nome, $idade, $profissao, $aniversario);

//    $lista = array();
//    $i = 0;
//    while($query->fetch()){
//       $lista[$i]['nome'] = $nome;
//       $lista[$i]['idade'] = $idade;
//       $lista[$i]['profissao'] = $profissao;            
//       $lista[$i]['aniversario'] = $aniversario;
//       $i++;
//    }
//    return $lista;
// }

?>