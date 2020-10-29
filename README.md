
# Trabalho 2 – Laboratório de Engenharia de Software I

# Especificação de Requisitos do Software

 
## Especificação de Requisitos do Software

### Especificação do Software
#### PROPOSITUS
# 1.Introducao
### 1.1 Objetivos deste documento
O documento em questão tem por finalidade apresentar um sistema para uma academia.Com o intuito de facilitar e otimizar o ecosistema da academia.
### 1.2 Escopo do produto
#### 1.2.1	Nome do produto e de seus componentes principais


#### 1.2.2	Missao do Produto
A missão do produto é agilizar e facilitar a interação do cliente com a academia. Permitindo que os clientes tenham acesso a informação de forma fácil e com que os profissionais possam adcionar informações do cliente de forma prática. 


#### 1.2.3.	Relação de Requisitos Funcionais

Número   | Descrição
--------- | ------
REQ-01 | O sistema  deverá  permitir o cadastro de funcionarios e alunos.
REQ-02 | O sistema deve permitir que o usuário veja somente aquilo que ele tem permissão.
REQ-03 | O sistema deve permitir que a secretaria cadastre os dados pessoais do cliente. (nome  completo,  CPF,  identidade  e  data  de  nascimento)
REQ-04 | O sistema deve permitir que a secretaria cadastre os dados do cartão do cliente. (número  do  cartão e nome do dono, )
REQ-05 | O sistema deve permitir que a secretaria selecione a modalidade e o tipo de plano do cliente. (mensal,   semestral   ou   anual)
REQ-06 | O sistema deverá verificar a disponibilidade do dia e horário, de  acordo  com  a  modalidade  pretendida  do  cliente
REQ-07 | O sistema deve permitir que o professor cadastre  o treino de  cada  aluno
REQ-08 | O sistema deve exibir o treino e o exame de aptidão física para cada aluno quando este acessar a aplicação.
REQ-09 | O sistema deve permitir que o médico cadastre o exame de aptidão física de um aluno. (peso, altura,  pressão  arterial,  percentual  de  gordura  no corpo,  percentual  de  massa  magra,  IMC e  situação  do  paciente)
 


#### 1.2.4.	Relação de Regras de Negócio
Número   | Descrição
--------- | ------
RN-01 | **Modalidades oferecidas:**  A academia deve oferecer ao aluno as modalidades de musculação,   natação, crossfit, ritmos  e spinning.
Rn-02 | **Planos:**  Um plano pode ser mensal, semestral ou anual.
Rn-03 | **Funcionamento:**  A academia deve funcionar de segunda a sexta das 06:30 às 20:00
Rn-04 | **Musculação:**  A modalidade de musculação é a única que pode ser feita em qualquer horário e dia, as demais deve-se seguir o quadro de horários.
Rn-05 | **Função professor:**  O professor é responsável por dar aulas e elaborar treinos    individualizados para a musculação.
Rn-06 | **Exame de aptidão:**  O exame de aptidão deve conter ausculta cardiorrespiratória, aferição da pressão arterial e anamnese (questionário e entrevista) dirigida para a atividade física que pretende praticar.

#### 1.2.6.	Requisitos de Usabilidade
Número  |	Descrição
--------- | ------
RU-01| O cliente/funcionário deverá possuir um celular/computador que permita a instalação e boa usabilidade do sistema.

#### 1.2.7.	Requisitos de Desempenho
Número  |	Descrição
--------- | ------
RD-01	| O APP deverá funcionar nas seguintes plataformas: Android, IOS e Web.
RD-02	| Para acessar o Sistema, o cliente/funcionário deverá estar autenticado e ter acesso à internet.


#### 1.2.8.	Benefícios do produto

Número |	Benefício |	Valor para o cliente
--------- | ------ | ------
1| 		Rapidez no atendimento| O cliente, caso escolha utilizar o aplicativo, não precisa ficar esperando que o professor precise dizer qual o próximo aparelho a ser feito.	 
2	| 	Preservação do meio ambiente | Tanto o cliente quanto a empresa contratante estarão contribuindo para o meio ambiente, pois o aplicativo reduzirá os gastos de papéis em fichas médicas e de treinos
3	|  Patricidade	| O cliente terá todas informações que precisa de forma fácil.

### 2 Descrição geral do produto

### 2.1 Perspectiva do produto

## 2.1.1	Lista dos Atores
Nome | 	Descrição
--------- | ------ 
Secretaria| 		Funcionario que estara na entrada da Academia para receber alunos e retirar todas duvidas, dar boas vindas, apresentar a academia,matricula de aluno. 
Administrador	| Responsavel por criar perfil para novos funcionarios e pode suprir a falta da secretaria,pois tambem podera cadastrar novos alunos,apresentar a academia para novos alunos,etc.
Professor	|  Responsavel por ministrar aulas em grupos : CrossFit,Natacao ,Spinning e Ritmos e responsavel por criar ficha de musculacao
Aluno	|  Cliente da academia, e motivo de tudo existir. :)	
Sistema	|  Responsavel por todo funcionanmento da aplicacao.

## 2.1.2	Diagrama de Caso de Uso

![alt text](https://github.com/leonardobotrel/TP02ES-Academia/blob/main/DIAGRAMA_CASO_DE_USO.PNG)
## 2.1.3	Diagrama de Caso de Uso
Código  |	Nome
--------- | ------ 
CSU-001	| Criar perfil no sitema para funcionario
CSU-002	| Realizar Matriculas de novos alunos
CSU-003	| Dar Boas Vindas ao aluno e mostrar a academia.
CSU-004 | Realizar exame de aptidao Fisica do Aluno.
CSU-005 | Criar Ficha de Musculacao para Aluno.
CSU-006	| Identificar por meio da carterinha na portaria da Academia.
CSU-007 | INtegracao da base de informacao.
CSU-008 | Verificar Informacoes do Aluno
CSU-009	| Verificar login no site
CSU-0010 | Realizar Pagamento