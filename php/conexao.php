<?php
$mysql_servidor="localhost"; // Seu servidor de mysql, normalmente é localhost.
$mysql_usuario="Natan"; // Seu usuário no mysql.
$mysql_senha="123456Mu"; // Sua senha no mysql.
$mysql_database="4parkingweb"; // Seu banco de dados criado.

$conn = mysqli_connect($mysql_servidor,$mysql_usuario,$mysql_senha,$mysql_database) or
die("Erro ao conectar!"); // Função que tenta conectar o PHP ao mysql, se falhar exibe o erro

if ($conn){echo("<script>alert('Parabéns!! A conexão ao banco de dados ocorreu
normalmente!');</script>");}
//Exibira um alerta do Javascript informando se foi possível se conectar com o BD.
?>