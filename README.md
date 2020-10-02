
# Trabalho 2 – Laboratório de Engenharia de Software I

# Especificação de Requisitos do Software

 
## Especificação de Requisitos do Software

### Especificação do Software
#### SISGYM
# 1.Introducao
### 1.1 Objetivos deste documento
O documento em questão tem por finalidade apresentar um sistema para uma academia.Com o intuito de facilitar e otimizar o ecosistema da academia.
### 1.2 Escopo do produto
#### 1.2.1	Nome do produto e de seus componentes principais
O software terá o nome de SISMOB

#### 1.2.2	Missao do Produto
A missão do produto é otimizar a insercao de imoveis disponiveis para aluguel e venda e facilitar o modo com que o cliente possa visualizar os imoveis disponiveis, a fim de reduzir o tempo para finalizacao do processo de compra ou venda do imovel.


#### 1.2.3.	Relação de Requisitos Funcionais

Número   | Descrição
--------- | ------
REQ-01 | Deve ser possivel cadastrar apenas casa e apartamentos como imoveis.
REQ-02 | Quando for cadastrar um novo imovel, o campo valor do aluguel nao deve estar vazio.
REQ-03 | Para cadastrar imoveis 
REQ-04 | Para os imóveis da categoria casa, as seguintes informações devem ser armazenadas: quantidade de quartos, quantidade de suítes, quantidade de salas de estar, número de vagas na garagem, área (em metros quadrados), se possui armário embutido e descrição (algum detalhe a mais que se deseja informar sobre a casa).
REQ-05 | para os imóveis da categoria apartamento, as seguintes informações devem ser armazenadas: quantidade de quartos, quantidade de suítes, quantidade de salas de estar, quantidade de salas de jantar, número de vagas na garagem, área (em metros quadrados), se possui armário embutido, descrição (algum detalhe a mais que se deseja informar sobre o apartamento), andar, valor do condomínio e indicativo se o condomínio possui portaria 24 horas.
REQ-06 | Para todos imoveis cadastrados,deve ser obrigatorio inserir o endereco do imovel,incluindo o bairro.
REQ-07  | O Cliente podera fazer busca por imoveis disponiveis fazendo uma busca por bairros.
REQ-08 | Se o cliente nao encontrar o bairro desejado na lista de bairros ja cadastrados, deve ser possivel digitar o bairro em um campo outros.
REQ-09 | A caixa de texto "outros" ,para busca de bairro que nao foram encontrados na lista ja cadastrada no sistema, somente devera ser mostrada em casa de selecao da opcao "outros" na lista de bairros disponiveis.


#### 1.2.4.	Relação de Regras de Negócio
Número   | Descrição
--------- | ------
RN-01 | Cadastro de Imoveis:Devera ser possivel cadastrar imoveis na modalidade:Casa e Apartamento,atentando -se as informacoes obrigatorias para cada tipo de imovel, o preco deve ser obrigatorio informar.
Rn-02 |Busca por Imoveis Disponiveis: Quando o Cliente desejar fazer uma busca por imoveis disponiveis, devera estar disponivel uma caixa de texto para informar o bairro que deseja selecionar para busca .

#### 1.2.6.	Requisitos de Usabilidade
Número  |	Descrição
--------- | ------
RU-01|	A plataforma estara disponivel para visualizacao no formato Desktop e Mobile. Sendo responsiva nos dois modos.

#### 1.2.7.	Requisitos de Desempenho
Número  |	Descrição
--------- | ------
RD-01	|O APP deverá funcionar nas seguintes plataformas: Android e IOS
RD-02	|Para acessar o APP, o cliente/funcionário deverá estar autenticado e ter acesso à internet.

#### 1.2.8.	Limites do produto
O APP deve suportar o acesso simultaneo de 500 usuarios, contando com os funcionarios.

#### 1.2.9.	Benefícios do produto

Número |	Benefício |	Valor para o cliente
--------- | ------ | ------
1| 		Rapidez no atendimento| 	Futuramente, o Sistema contara com uma atendente virtual, que ajudara no processo de aquisicao do imovel. |
2	| 	Preservação do meio ambiente | 	Tanto o cliente quanto a empresa contratante estarão contribuindo para o meio ambiente, pois o aplicativo reduzirá os gastos de papéis como panfleto.
3	|  Agilidade	| O Cliente ganha tempo e comodidade para conhecer os imoveis disponiveis pela imobiliaria, sendo possivel visualizar os imoveis de qualquer lugar conectado a internet,assim, nao sera necessario a principio de marcar uma visita junto ao corretor para ver o imovel.


