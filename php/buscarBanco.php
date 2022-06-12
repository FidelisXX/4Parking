<?php
include "conexao.php";

//Query the database
$result_usuario = "SELECT * FROM endereco_parceiros  ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//check if found in the table

if(($resultado_usuario) AND ($resultado_usuario ->num_rows !=0)) {
    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
            echo $row_usuario ['$bairro_parceiro']; //.['$rua_parceiro']['$numero_parceiro']['$lote_parceiro']
    }
        }else{
        echo"Nenhum estacionamento proximo encontrado.";
    }
?>