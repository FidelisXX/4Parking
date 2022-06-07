<?php
//includes code that opens connection to mysql
include 'conexao.php';
//captures the information sent by the form
$nome_usu = $_POST['nomeUsuario'];
$email_usu = $_POST['criarEmailUsuario'];
$telefone_usu=$_POST['telefoneUsuario'];
$data_nasc_usu=$_POST['data'];
$endereco_usu=$_POST['enderecoUsuario'];
$senha_usu = $_POST['criarSenhaUsuario'];
$cpf_usu=$_POST['cpfUsuario'];


$query="insert into cadastro_usuario values ('$nome_usu','$email_usu','$telefone_usu','$data_nasc_usu','$endereco_usu',
'$senha_usu','$cpf_usu')"; //SQL statement to be executed
mysqli_query( $conn, $query ) or die("Erro ao tentar inserir o dado!"); //instruction execution
if ($query){echo("<script>alert('Parabéns!! Os dados foram cadastrados com sucesso!'); </script>");}
if ($query==true) {
    header('location:../html/cadastroVeiculo.html');
}
//It will display a Javascript alert informing whether or not it was possible to register the data.
mysqli_close($conn); //Function to close the connection with the DB.
?>