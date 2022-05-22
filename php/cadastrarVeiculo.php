<?php
//inclui o código que abre conexão com o mysql
include 'conexao.php';
//captura as informações enviadas pelo formulário
$placa_veiculo = $_POST['placa'];
$renavan_veiculo = $_POST['renavan'];
$modelo_veiculo=$_POST['modelo'];
$cor_veiculo=$_POST['cor'];



$query="insert into cadastro_veiculo values ('$placa_veiculo','$renavan_veiculo','$modelo_veiculo',
'$cor_veiculo')"; //Instrução SQL que será executada
mysqli_query( $conn, $query ) or die("Erro ao tentar inserir o dado!"); //execução da instrução
if ($query){echo("<script>alert('Parabéns!! Os dados foram cadastrados com sucesso!');</script>");}
if ($query==true) {
    header('location:../html/login.html');
}
//Exibira um alerta do Javascript informando se foi ou não possivel cadastrar os dados.
mysqli_close($conn); //Função para fechar a conexão com o BD.
?>