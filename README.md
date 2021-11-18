# Desafio Troupe #

#### Desafio proposto para projeto com o objetivo de desenvolver API REST para manipulação de dados ####

<div align="justify">
  
Para as rotinas de criação, atualização e exclusão de dados para o banco de dados os testes devem ser executados via Insomnia Rest uma vez que as aplicações foram criadas, testadas e executadas utilizando este software para os testes.

## Rotina de Criação de Cidadão ##

![image](https://user-images.githubusercontent.com/62182975/142422219-21358d92-4ac4-42ae-b867-72e45a55f7d8.png)

Para adicionarmos um cidadão ao nosso banco de dados deve-se seguir os passos de acordo com a imagem acima, onde o "XXX" na Url deverá ser o nome da pasta onde os arquivos estão hospedados, e após isto se insere o endereço "addUser.php" para acessar a operação. </br>
Vale-se ressaltar que para o banco de dados as colunas tem as configurações que podem ser vistas pelo arquivo SQL neste repositório.

## Rotina de Atualização ##

![image](https://user-images.githubusercontent.com/62182975/142426841-2ea5bbc8-bd7a-40d6-886c-44e97b40db2d.png)

Para a atualização do cidadão o processo é similar ao de inserção, sendo necessário apenas a adição do campo "Id" que é a chave necessária para atualização.</br>
Deverá informar o endereço "updateUser.php" na Url.

## Rotina de Exclusão ##

![image](https://user-images.githubusercontent.com/62182975/142427419-3232c3ec-9d24-461a-92f3-4848829a2575.png)

Para a exclusão deverá ser informado apenas o Id do cidadão, onde este é o requisito para exclusão.</br>
Deverá informar o endereço "deleteUser.php" na Url.

## Rotina de Seleção ##

![image](https://user-images.githubusercontent.com/62182975/142428448-6c7ea8fc-64ea-4ea3-bfb9-6528acfe0c9b.png)

Para a seleção de dados, caso não seja informado nenhum valor específico para consulta, todos os dados cadastrados dentro do banco de dados são mostrados para o usuário da API de forma que ele seleciona a coluna de "Nome" no banco de dados e mostra todos os dados em ordem crescente a partir desta coluna.</br>
Deverá informar o endereço "getUser.php" na Url, sendo este a única rotina que utiliza o método GET, as demais será utilizado o método POST. 

# Considerações #

Antes de mais nada gostaria de esclarecer que esta API seria de fato a primeira API desenvolvida por mim, sendo então ela o meu <b>"Hello World!"</b> neste mundo, portanto ela irá apresentar algumas falhas, alguns Bugs e com toda a certeza tem muito espaço para melhoria de codigos e dicas que poderão ser dadas para meu desenvolvimento, o PHP é uma linguagem que nunca tive muita familiaridade por nunca ter focado em desenvolvimento WEB e ao decorrer deste desafio tive de fazer uma imersão total para adquirir o maximo de conhecimento sobre ela e também para desenferrujar visto que não pratico o desenvolvimento de codigos já a algum tempo.
<br></br>Abaixo irei listar alguns problemas que encontrei ao longo do desenvolvimento.
</br><li>Apesar da descritiva do desafio ter solicitado a utilização da API do ViaCEP, por não ter familiaridade de como consumir APIs não consegui desenvolver algo em relação a este ponto, mesmo com o material que procurei pela internet tive dificuldades com a solicitação; </li>
</br><li>Também era um ponto a ser avaliado, a inserção dos dados via linha de comando, ao longo do projeto até chegar nesta versão final do projeto eu construí outros 4 modelos de API, onde cada um contemplava algo referente ao desafio e ao final eu tentei juntar todos em um arquivo, que seria este, sendo que cada um dos 4 modelos anteriores apresentavam maneiras diferentes de serem desenvolvidas, este foi um ponto que consegui fazer em um dos modelos porém não consegui transportar para esta ultima versão, onde eu apenas consegui manipular os dados utilizando o Insomnia, portanto esta função não esta implementada neste API;</li>
</br><li>E por fim gostaria de agradecer pela oportunidade de ter tido a oportunidade de ter apresentado este desafio, mesmo que incompleto, não tendo conseguido apresentar o que eu gostaria de ter apresentado como resultado final, mesmo que tenha sido um pouco frustante o processo de desenvolvimento, onde as vezes nada dava certo, gastando horas para resolver um problema simples, por mais que eu tenha me frustrado um pouco ao mesmo tempo eu fico feliz com o resultado que eu consegui, eu nunca pensei que seria capaz de entregar algo em tão pouco tempo mesmo não tendo experiencia quase nenhuma com a linguagem, e após este processo eu sou apenas motivação para continuar aprendendo e mostrar mais vezes que eu sou capaz de algo, mesmo que no inicio nem eu mesmo acredite em mim, mas o sentimento de motivação hoje fala mais alto que o de desconfiaça de mim mesmo. </li>
<br>Muito obrigado pela oportunidade de ter mostrado a mim mesmo que eu sou capaz!

</div>
