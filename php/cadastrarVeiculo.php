<?php
//Conection with SQL
include 'conexao.php';
//input the informations send by form
$placa_veiculo = $_POST['placa'];
$renavan_veiculo = $_POST['renavan'];
$modelo_veiculo=$_POST['modelo'];
$cor_veiculo=$_POST['cor'];



$query="insert into cadastro_veiculo values ('$placa_veiculo','$renavan_veiculo','$modelo_veiculo',
'$cor_veiculo')"; //Instruction of SQL started
mysqli_query( $conn, $query ) or die("Erro ao tentar inserir o dado!"); //execut the instructions
if ($query){echo("<script>alert('Parabéns!! Os dados foram cadastrados com sucesso!');</script>");}
if ($query==true) {
    header('location:../html/login.html');
}
//Function to inform if the connection is ok or not
mysqli_close($conn); //Function to close connection with SQL
?>