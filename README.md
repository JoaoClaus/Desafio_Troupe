# Desafio_Troupe #

#### Desafio proposto para projeto com o objetivo de desenvolver API REST para manipulação de dados ####

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
