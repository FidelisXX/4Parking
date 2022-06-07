<?php 
include 'conexao.php';

session_start();
 // session start and check the value of Bairro

 $bairro_parceiro = $_POST['localDestino'];
 
 //connection with database

 $conn = mysqli_connect("localhost", "Natan",
"123456Mu", "4parkingweb") or die ("Sem conexão com o
servidor"); //$result run the select of the $query.
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

