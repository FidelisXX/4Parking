 <?php
 // session_start start the session
session_start();
 //informations about the login of session
 $email_usu = $_POST['login'];
 $senha_usu = $_POST['senha'];
 // check the session with database
 $conn = mysqli_connect("localhost", "Natan",
"123456Mu", "4parkingweb") or die ("Sem conexão com o
servidor"); //$result run the select of $query.
$query="SELECT * FROM cadastro_usuario WHERE
email_usu ='$email_usu' AND senha_usu='$senha_usu'";
$result = mysqli_query($conn,$query);

// check if the $result its true or false, and send to playerWeb.html if its true or login.html to false
if(mysqli_num_rows ($result) > 0 ) {
 $_SESSION['login'] = $email_usu;
 $_SESSION['senha'] = $senha_usu;
 header('location:verificar.php');}
else{
 unset ($_SESSION['login']);
 unset ($_SESSION['senha']);
 header('location:../html/login.html');}
?>