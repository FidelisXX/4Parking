<?php
include "conexao.php";

// connect to database
$conn = mysqli_connect($mysql_servidor,$mysql_usuario,$mysql_senha,$mysql_database) or
die("Erro ao conectar!"); // Code that tries to connect PHP to mysql, if it fails displays the error
// creates the SQL statement that will select the data

$query = sprintf("SELECT bairro_parceiro, rua_parceiro, numero_parceiro, lote_parceiro FROM endereco_parceiros");
// run the query
$dados = mysqli_query($conn, $query) or die ($mysqli -> error);
// transform the data into an array
$linha = mysqli_fetch_assoc($dados);
// calculate how much data returned
$total = mysqli_num_rows($dados);
?>

<html>
	<head>
	<link rel="stylesheet" href="../css/exibir_enderecos.css">

	<title>Estacionamentos disponiveis</title>
</head>
<body>
<!--from here down the php calls-->
<?php
	// if the number of results is greater than zero, show the data
	if($total > 0) {
		// starts the loop that will show all the data
		do {
?> 

	<table>
		<thead>
			<tr>
		<th>Endereco</th>
		<th>Rua</th>
		<th>Numero</th>
		<th>Lote</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><?=$linha['bairro_parceiro']?></td>
			<td><?=$linha['rua_parceiro']?></td>
			<td> <?=$linha['numero_parceiro']?></td>
			<td> <?=$linha['lote_parceiro']?></td>
		</tr>
		
		</tbody>
	</table>
	<form action="../html/pagamento.html" method="POST">
    <button id="seguirBt">Seguir</button>
    </form>


        
<?php
		// ends the loop that will show the data
		}while($linha = mysqli_fetch_assoc($dados));
	// end to if
	}
?>
  <p><img  src ="../img/lemon-style-azul-gg.png" id="lemonG">
            <img  src ="../img/lemon-style-azul-gg.png" id="lemonG1">
        <img  src ="../img/lemon-style-azul-pp.png" id="lemonpp">
        <p><img  src ="../img/lemon-style-azul-pp.png" id="lemonpp1"></p>
</body>
</html>
<?php
// take the result of the search from memory
mysqli_free_result($dados);
?>


<style>
     table {
        border-collapse:collapse;
    }
    th, td {
        padding: 10px;
    }
    thead tr{
        border-bottom: solid 3px #444;
    }
    tbody tr:hover {
        background-color: white;
    }
    tfoot {
        background-color:#444;
        color:white;
        font-weight: bold;
    }
    thead {
		padding: 15px;
	}
</style>