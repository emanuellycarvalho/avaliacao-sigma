# SIGMA - Avaliação de Conhecimento Backend

## Instruções para o candidato:

1 -  Faça um fork deste repositório para criar sua própria cópia.

2 -  Configure o projeto em sua máquina local, seguindo os passos de [instalação](#instalação).

3 - Implemente as [tarefas](#tarefas) abaixo, seguindo as melhores práticas do Laravel e mantendo um código limpo e organizado.

4 - Adicione documentação no README.md do seu projeto, explicando como executar o projeto e quaisquer instruções adicionais.

5 - Após concluir o teste, envie o link do seu repositório por e-mail para nossa equipe de recrutamento.

## Diretrizes para contribuição:

 - Certifique-se de responder ou resolver todos os exercícios e perguntas da maneira mais clara e precisa possível.
 - Se necessário, você pode adicionar código-fonte, arquivos ou documentação complementar para explicar suas respostas ou soluções.
 - Seja organizado e estruturado em seu código. Mantenha um estilo de código limpo e legível.
 - Verifique se o seu código está funcionando corretamente antes de enviar o link.
 - Seja respeitoso e evite qualquer forma de plágio ou cópia de respostas de outras pessoas.
 - Sinta-se à vontade para adicionar qualquer informação adicional que você achar relevante para a sua avaliação.

## Tarefas:

1) Crie uma API RESTful com Laravel para gerenciar uma entidade "Usuário" com os seguintes campos: `nome`, `e-mail` e  `senha`.

2) Utilize as migrações do Laravel para criar a tabela de usuários e execute as migrações para criar a estrutura do banco de dados.

3) Implemente rotas e um controller para listar todos os usuários, obter um usuário específico por ID, criar um novo usuário, atualizar um usuário existente e excluir um usuário.

4) Valide os dados de entrada para a criação e atualização de usuários, garantindo que o nome, e-mail e senha estejam presentes e atendam aos requisitos mínimos (por exemplo, comprimento mínimo da senha).

5) Implemente o padrão Repository para separar a lógica de acesso ao banco de dados dos controladores. Crie um repositório de usuários que contenha métodos para buscar, criar, atualizar e excluir usuários.

6) Implemente o padrão Service para encapsular a lógica de negócios relacionada aos usuários. Crie um serviço de usuários que utilize o repositório de usuários para realizar operações como criação, atualização e exclusão de usuários.

7) Refatore os controladores existentes para usar os serviços de usuários em vez de realizar diretamente as operações no banco de dados. Isso ajudará a separar as responsabilidades e tornar o código mais coeso e reutilizável.

8) Implemente um mecanismo de paginação na listagem de usuários, retornando uma quantidade limitada de usuários por página. A API deve aceitar um parâmetro de consulta `page` para especificar a página a ser retornada e um parâmetro de consulta `limit` para especificar o número de usuários por página. Por exemplo, `GET /api/v1/users?page=2&limit=10` deve retornar os usuários 11 a 20.

9) (Opcional) Escreva testes automatizados para testar as rotas criadas.

## Instalação
### Passo 1: Instalar Dependências

Abra o terminal e navegue até a pasta raiz do projeto clonado.
Execute o comando 
```
composer install
``` 
para instalar as dependências do Laravel. Isso irá instalar todas as bibliotecas e pacotes necessários para o funcionamento do projeto Laravel.

### Passo 2: Configurar o Arquivo .env

Faça uma cópia do arquivo .env.example e renomeie-a para .env na pasta raiz do projeto. Pode usar o comando:
```
cp .env.example .env
```
Abra o arquivo .env e configure as variáveis de ambiente necessárias, como banco de dados, nome do aplicativo, chave de aplicativo, etc., de acordo com a configuração do seu ambiente local.

### Passo 3: Gerar Chave de Aplicativo

No terminal, execute o comando 
```
php artisan key:generate 
```
para gerar uma nova chave de aplicativo para o projeto Laravel.
Isso irá preencher automaticamente a chave de aplicativo no arquivo .env do projeto.

### Passo 4: Iniciar o Servidor de Desenvolvimento

No terminal, execute o comando 
```
php artisan serve 
```
para iniciar o servidor de desenvolvimento do Laravel.
O Laravel irá criar um servidor de desenvolvimento local na porta padrão 8000 (ou outra porta especificada) e você poderá acessar o aplicativo Laravel em seu navegador através do endereço http://localhost:8000 (ou outra porta especificada).

--- 
Divirta-se e boa sorte com a avaliação! Estamos ansiosos para revisar suas respostas ou soluções. Se tiver alguma dúvida ou precisar de esclarecimentos adicionais, fique à vontade para entrar em contato conosco.
