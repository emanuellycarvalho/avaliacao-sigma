# SIGMA - Avaliação de Conhecimento Backend

As migrações do Laravel foram utilizadas para criar a tabela de usuários e as migrações foram executadas para criar a estrutura do banco de dados. 

Foram implementados os padrões Repository e Service para separar a lógica de acesso ao banco de dados dos controladores. Foi criado um repositório de usuários que contém métodos de CRUD para usuários.

Foi criada uma API RESTful com Laravel para gerenciar a entidade "Usuário" com os campos: `nome`, `e-mail` e `senha`, com rotas e um controlador com o CRUD para usuário. Os dados de entrada para a criação e atualização de usuários foram validados, garantindo que o nome, e-mail e senha estejam presentes e atendam aos requisitos mínimos, como o comprimento mínimo da senha. Tudo utilizando o padrão Repository criado.

Neste padrão para usuários, alguns métodos como "show", que seria a busca por um usuário específico por meio do seu código, não precisariam ser adaptado. Nestes casos, a tecnologia de model bind do Laravel facilitaria a escrita deste código porque nenhuma alteração padrão foi feita. Entretanto, para padronizar a escrita do código de usuários, também adaptei ainda que sem necessidade *prática*. 

Foi implementado um mecanismo de paginação na listagem de usuários, retornando uma quantidade limitada de usuários por página. A API aceita um parâmetro de consulta `page` para especificar a página a ser retornada e um parâmetro de consulta `limit` para especificar o número de usuários por página. Por exemplo, `GET /api/v1/users?page=2&limit=10` retorna os usuários 11 a 20. Foi implementada também uma rota alternativa com o mesmo propósito, que pode ser acessada por meio de `GET /api/v1/users/paginate/2/10`, para que fossem explorados outro recursos do Laravel.

Foram escritos testes para as rotas criadas utilizando o PHPUnit.