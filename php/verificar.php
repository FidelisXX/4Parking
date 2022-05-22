<?php

 session_start();
 
 if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
 header('location:../html/login.html'); }
 $email_usu = $_SESSION['login'];
 
if($_SESSION == true){
    header('location:../html/playerWeb.html');
}

 ?>
   
