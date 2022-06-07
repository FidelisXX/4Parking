<?php
//Conection with SQL
include 'conexao.php';
//input the informations send by form
$bairro_parceiro = $_GET['bairro_parceiro'];
$rua_parceiro = $_GET['rua_parceiro'];
$numero_parceiro = $_GET['numero_parceiro'];
$lote_parceiro=$_GET['lote_parceiro'];



$query="insert into endereco_parceiros values ('$bairro_parceiro','$rua_parceiro','$numero_parceiro','$lote_parceiro','')"; //Instruction of SQL started
mysqli_query( $conn, $query ) or die("Erro ao tentar inserir o dado!"); //execut the instructions
if ($query){echo("<script>alert('Parabéns!! Os dados foram cadastrados com sucesso!');</script>");}
//Function to inform if the connection is ok or not
mysqli_close($conn); //function to close connection with SQL
if($query==true){
    header("location:../html/playerWeb.html");
}
?>