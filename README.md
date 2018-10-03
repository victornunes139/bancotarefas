												GERENCIADOR DE TAREFAS
OBJETIVO:

Este sistema foi elaborado com o objetivo de se ter um controle a respeito das atividades realizadas em um determinado ambiente.O usuário tem a opção
de Cadastrar,Editar,Visualizar e Excluir a atividade desejada.

FUNÇÕES:

	-CADASTRAR: No cadastrar deverá ser inserido o nome da atividade,a descrição da mesma(+detalhes), algum prazo de entrega, o nível de prioridade e o status(A fazer,Em Execução,Feita).
	
	-EDITAR:  É possível alterar o nome,a descrição,o prazo ,o nível de prioridade e o status da atividade.
	
	-EXCLUIR: Exclui a atividade;
	
	-VISUALIZAR: É possível ver com mais detalhes aquela atividade em específico,como o seu ID no banco.

	
COMO TER ACESSO AO BANCO DE DADOS E AO SISTEMA:

	-Primeiro deve-se ir ao arquivo "db.sql" ,encontrado na raiz do projeto. Esse arquivo contém o estrutura do banco de dados. A partir disso,dependendo de qual programa o usuário utilizar,poderá colocar esse código para ser executado.
	
	-O segundo passo é ir ao "config.php" ,localizado na pasta "config".Esse arquivo contém a lógica de conexão entre esse projeto e o servidor.As informações ,como o nome do servidor,senha,será relativo,sendo necessário ser alterado para a necessidade do usuário que estiver utilizando-o.
	
	
DETALHES DO BANCO DE DADOS:

	---------------------------------------
	TABELAS: 
			 -ACTIVITIES
			 -PRIORITIES
			 -STATUSS
	-------------------------------------
	->É importante citar que é realizada um relacionamento entre as tabelas "priorities" e "statuss" com a "activities".
	

FERRAMENTAS UTILIZADAS:

	-BOOTSTRAP;
	
	-PHP 7
	
	-MySQL
	
	-Composer
	
	
DESENVOLVEDOR:

	- Victor Nunes Saboia


