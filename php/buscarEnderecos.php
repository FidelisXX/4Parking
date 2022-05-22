<?php
include "conexao.php";

// conecta ao banco de dados
$conn = mysqli_connect($mysql_servidor,$mysql_usuario,$mysql_senha,$mysql_database) or
die("Erro ao conectar!"); // Função que tenta conectar o PHP ao mysql, se falhar exibe o erro
// cria a instrução SQL que vai selecionar os dados

$query = sprintf("SELECT bairro_parceiro, rua_parceiro, numero_parceiro, lote_parceiro FROM endereco_parceiros");
// executa a query
$dados = mysqli_query($conn, $query) or die ($mysqli -> error);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="../css/exibir_enderecos.css">

	<title>Exemplo</title>
</head>
<body>
<!--daqui para baixo o php chama-->
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
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
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysqli_fetch_assoc($dados));
	// fim do if
	}
?>
  <p>
             <img src="../img/lemon-style.png" alt="" id="lemonp">
         </p>
         <p>
             <img src="../img/lemon-style.png" alt="" id="lemonp2">
         </p>
         <p>
             <img src="../img/lemon-style.png" alt="" id="lemonp3">
         </p>
         <p>
             <img src="../img/lemon-style.png" alt="" id="lemonp4">
         </p>
</body>
</html>
<?php
// tira o resultado da busca da memória
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