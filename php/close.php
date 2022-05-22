<?php
 session_start();
 if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    header('location:../html/login.html'); }
    $email_usu = $_SESSION['login'];
// session_start inicia a sessão
 if(isset($_SESSION["login"])){
 session_destroy();
// session_destroy finaliza a sessão
 header("location:../html/login.html");
// header direciona para a página de login o index.php
 }else{
 echo "Não foi possivel finalizar a sessão";
 }
?>