## Instruções para o candidato:
---

### 1. Faça um fork deste repositório para criar sua própria cópia.
<br>

### 2. Configure o projeto em sua máquina local.
<br>

### 3. Implemente as tarefas abaixo, seguindo as melhores práticas do Laravel e mantendo um código limpo e organizado.
<br>

### 4. Adicione documentação no README.md do seu projeto, explicando como executar o projeto e quaisquer instruções adicionais.
<br>

### 5. Após concluir o teste, envie o link do seu repositório por e-mail para nossa equipe de recrutamento.
<br>

## Tarefas do teste:
---

### 1) Crie uma API RESTful com Laravel para gerenciar uma entidade "Usuário" com os seguintes campos: `nome`, `e-mail` e  `senha`.
<br>

### 2) Utilize as migrações do Laravel para criar a tabela de usuários e execute as migrações para criar a estrutura do banco de dados.
<br>

### 3) Implemente rotas e um controller para listar todos os usuários, obter um usuário específico por ID, criar um novo usuário, atualizar um usuário existente e excluir um usuário.
<br>

### 4) Valide os dados de entrada para a criação e atualização de usuários, garantindo que o nome, e-mail e senha estejam presentes e atendam aos requisitos mínimos (por exemplo, comprimento mínimo da senha).
<br>


### 5) Implemente o padrão Repository para separar a lógica de acesso ao banco de dados dos controladores. Crie um repositório de usuários que contenha métodos para buscar, criar, atualizar e excluir usuários.
<br>


### 6) Implemente o padrão Service para encapsular a lógica de negócios relacionada aos usuários. Crie um serviço de usuários que utilize o repositório de usuários para realizar operações como criação, atualização e exclusão de usuários.
<br>

### 7) Refatore os controladores existentes para usar os serviços de usuários em vez de realizar diretamente as operações no banco de dados. Isso ajudará a separar as responsabilidades e tornar o código mais coeso e reutilizável.
<br>

### 8) Implemente um mecanismo de paginação na listagem de usuários, retornando uma quantidade limitada de usuários por página. A API deve aceitar um parâmetro de consulta `page` para especificar a página a ser retornada e um parâmetro de consulta `limit` para especificar o número de usuários por página. Por exemplo, `GET /api/v1/users?page=2&limit=10` deve retornar os usuários 11 a 20.
<br>

### 9) (Opcional) Escreva testes automatizados para testar as rotas criadas.
