# 4Parking

## Web and Mobile Project

  #### PROPOSTA
  
- Tendo como objetivo geral facilitar o dia a dia das pessoas que trafegam pelas ruas da Região Metropolitana do Recife(RMR) e precisam deixar seus veículos estacionados por horas em locais ditos popularmente de "risco", estacionamentos clandestinos ou até mesmo não conseguindo encontrar estacionamentos em determinados lugares, festas de modo geral. Temos o objetivo de atender a este público, dar a possibilidade de encontrar e escolher uma vaga mesmo antes de sair de casa, trazendo conforto, economia e principalmente segurança. Contando com formas de pagamento 100% eficazes e virtuais como Crédito e Pix.
Para nossos parceiros(estacionamentos) buscamos propor uma experiência única, lucrativa e definitivamente efetiva, criando possibilidades de parcerias empresariais, ou até mesmo pessoais para quem tem um espaço ou uma garagem que não utiliza conseguir disponibiliza-lá conosco e ganhar uma renda extra ao fim do mês.


  #REQUISITOS E TECNOLOGIAS UTILIZADAS NO SISTEMA
  
- PHP5
- MySQL
- Xammp
- HTML5
- CSS3
- JavaScript
- IDE a escolha (Foi utilizado VSCode 2021 pela Squad)
- Navegador a escolha


  #INSTRUÇÕES GERAIS

- Realize a instalação em seu Sistema Operacional dos requisitos citados acima;
- Realizar as configurações do Xammp corretamente (Caso não saiba como realizar essa instrução, basta pesquisar no Youtube)

    IMPORTANTE!!
- Configurar o banco de dados local do Xammp (Para que tudo funcione corretamente é preciso fazer o cadastro do banco exatamente como está configurado no arquivo 4Parking/conexao.php).

			<?php
		$mysql_servidor="localhost"; // Infos about the connection SQL.
		$mysql_usuario="Natan"; // login of user SQL database
		$mysql_senha="123456Mu"; // password of user SQL database
		$mysql_database="4parkingweb"; // name of SQL database

		$conn = mysqli_connect($mysql_servidor,$mysql_usuario,$mysql_senha,$mysql_database) or
		die("Erro ao conectar!"); // Connection with SQL

		if ($conn){echo("<script>alert('Parabéns!! A conexão ao banco de dados ocorreu
		normalmente!');</script>");}
		//Function to inform if the connection is ok or not
		?>
Caso tenha experiência com o Xammp e o MySQL você também pode configurá-lo manualmente a sua escolha;

- Após realização dos passos anterior corretamente, basta fazer o acesso em seu navegador por meio do localhost na porta configurada pelo Xammp;
- O sistema está 100% funcional em dispositivos mobile, fizemos toda uma adaptação para atendermos todos os públicos;


  #CONTRIBUIÇÃO
- Natan Luiz -> https://github.com/NatanLuiz1
- Davi Fidelis -> https://github.com/FidelisXX
- Luan Ferreira -> https://github.com/lusoferreiras
# 4Parking-Projeto_Integrador_IV
