<?php
//inclui o código que abre conexão com o mysql
include 'conexao.php';
//captura as informações enviadas pelo formulário
$cpf_usu = $_POST['excpf_usu'];

$query="DELETE FROM cadastro_usuario WHERE cpf_usu ='$cpf_usu'";
mysqli_query( $conn, $query ) or die("Erro ao tentar excluir o usuario!");
if ($query){echo("<script>alert('Parabéns!! O usuario foi excluído com
sucesso!');</script>");}
//Exibira um alerta do Javascript informando se foi ou não possível excluir os dados.
mysqli_close($conn);
?>