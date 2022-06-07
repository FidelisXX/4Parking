<?php
//Connect to database
include 'conexao.php';
//input to infos about form
$cpf_usu = $_POST['excpf_usu'];

$query="DELETE FROM cadastro_usuario WHERE cpf_usu ='$cpf_usu'";
mysqli_query( $conn, $query ) or die("Erro ao tentar excluir o usuario!");
if ($query){echo("<script>alert('Parabéns!! O usuario foi excluído com
sucesso!');</script>");}
//Function to inform if the connection is ok or not
mysqli_close($conn);
?>