<?php 
include 'conexao.php';

session_start();
 // as variáveis login e senha recebem os dados da

 $bairro_parceiro = $_POST['localDestino'];
 
 // A próxima linha é responsável pela conexão com

 $conn = mysqli_connect("localhost", "Natan",
"123456Mu", "4parkingweb") or die ("Sem conexão com o
servidor"); // A variavel $result executa o select da $query.
$query="SELECT * FROM endereco_parceiros WHERE
bairro_parceiro ='$bairro_parceiro'";
$result = mysqli_query($conn,$query);


if(mysqli_num_rows ($result) > 0 ) {
 $_SESSION['localDestino'] = $bairro_parceiro;

 header('location:../html/boaviagem.html');}
else{
   unset ($_SESSION['localDestino']);
 echo("<script>alert('Parabéns!! O usuario foi excluído com
    sucesso!');</script>");


 header('location:../html/erro.html');
}
?>

