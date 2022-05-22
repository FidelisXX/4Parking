<?php
//inclui o código que abre conexão com o mysql
include 'conexao.php';
//captura as informações enviadas pelo formulário
$nome_usu = $_POST['nomeUsuario'];
$email_usu = $_POST['criarEmailUsuario'];
$telefone_usu=$_POST['telefoneUsuario'];
$data_nasc_usu=$_POST['data'];
$endereco_usu=$_POST['enderecoUsuario'];
$senha_usu = $_POST['criarSenhaUsuario'];
$cpf_usu=$_POST['cpfUsuario'];


$query="insert into cadastro_usuario values ('$nome_usu','$email_usu','$telefone_usu','$data_nasc_usu','$endereco_usu',
'$senha_usu','$cpf_usu')"; //Instrução SQL que será executada
mysqli_query( $conn, $query ) or die("Erro ao tentar inserir o dado!"); //execução da instrução
if ($query){echo("<script>alert('Parabéns!! Os dados foram cadastrados com sucesso!'); </script>");}
if ($query==true) {
    header('location:../html/cadastroVeiculo.html');
}
//Exibira um alerta do Javascript informando se foi ou não possivel cadastrar os dados.
mysqli_close($conn); //Função para fechar a conexão com o BD.
?>