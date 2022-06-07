<?php 
$consulta = "SELECT * FROM cadastro_usuario";
$conn = $mysqli -> query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php  while($dados=$conn ->fetch_array()){ ?>
<tr>
  <td>  <?php echo $dados["nome_usu"]; ?> </td>
    </tr>
    <?php }  ?>
  
</body>
</html>


