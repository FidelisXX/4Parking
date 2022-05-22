 <?php
 // session_start inicia a sessão
session_start();
 // as variáveis login e senha recebem os dados da

 $email_usu = $_POST['login'];
 $senha_usu = $_POST['senha'];
 // A próxima linha é responsável pela conexão com

 $conn = mysqli_connect("localhost", "Natan",
"123456Mu", "4parkingweb") or die ("Sem conexão com o
servidor"); // A variavel $result executa o select da $query.
$query="SELECT * FROM cadastro_usuario WHERE
email_usu ='$email_usu' AND senha_usu='$senha_usu'";
$result = mysqli_query($conn,$query);

/* Verifica se $result é positivo ou falso, se positivo vai para
playerWeb.html, se não, vai para login.html */
if(mysqli_num_rows ($result) > 0 ) {
 $_SESSION['login'] = $email_usu;
 $_SESSION['senha'] = $senha_usu;
 header('location:verificar.php');}
else{
 unset ($_SESSION['login']);
 unset ($_SESSION['senha']);
 header('location:../html/login.html');}
?>