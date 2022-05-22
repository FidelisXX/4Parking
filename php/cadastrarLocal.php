<?php
//inclui o código que abre conexão com o mysql
include 'conexao.php';
//captura as informações enviadas pelo formulário
$bairro_parceiro = $_GET['bairro_parceiro'];
$rua_parceiro = $_GET['rua_parceiro'];
$numero_parceiro = $_GET['numero_parceiro'];
$lote_parceiro=$_GET['lote_parceiro'];



$query="insert into endereco_parceiros values ('$bairro_parceiro','$rua_parceiro','$numero_parceiro','$lote_parceiro','')"; //Instrução SQL que será executada
mysqli_query( $conn, $query ) or die("Erro ao tentar inserir o dado!"); //execução da instrução
if ($query){echo("<script>alert('Parabéns!! Os dados foram cadastrados com sucesso!');</script>");}
//Exibira um alerta do Javascript informando se foi ou não possivel cadastrar os dados.
mysqli_close($conn); //Função para fechar a conexão com o BD.
if($query==true){
    header("location:../html/playerWeb.html");
}
?>