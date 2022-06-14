<?php
$mysql_servidor="us-cdbr-east-05.cleardb.net"; // Infos about the connection SQL.
$mysql_usuario="b15089780828d0"; // login of user SQL database
$mysql_senha="05bb3e24"; // password of user SQL database
$mysql_database="heroku_a053a55912a00a8"; // name of SQL databasea

//$mysql_servidor="localhost"; // Infos about the connection SQL.
//$mysql_usuario="Natan"; // login of user SQL database
//$mysql_senha="123456Mu"; // password of user SQL database
//$mysql_database="4parkingweb"; // name of SQL database

$conn = mysqli_connect($mysql_servidor,$mysql_usuario,$mysql_senha,$mysql_database) or
die("Erro ao conectar!"); // Connection with SQL

if ($conn){echo("<script>alert('Parabéns!! A conexão ao banco de dados ocorreu
normalmente!');</script>");}
//Function to inform if the connection is ok or not
?>