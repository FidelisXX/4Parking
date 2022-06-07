<?php
 session_start();
 if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    header('location:../html/login.html'); }
    $email_usu = $_SESSION['login'];
// session_start start the section
 if(isset($_SESSION["login"])){
 session_destroy();
// session_destroy close connection
 header("location:../html/login.html");
// header direct to page of login (index.html)
 }else{
 echo "Não foi possivel finalizar a sessão";
 }
?>