# Lista dos comandos úteis para o desenvolvimento do projeto:
<b>OBS</b>: Substitua `{{Table}}`/`{{table}}` pelo nome da tabela, ambos no singular e com a primeira letra maiúscula/mínuscula conforme o caso.

### Criar migration:
```
php artisan make:migration create_{{table}}s_table
```
### Criar model:
```
php artisan make:model {{Table}}
```
### Criar seeder:
```
php artisan make:seeder {{table}}
```
### Rodar migrations:
```
php artisan migrate
```
### Rodar seeders:
```
php artisan db:seed
```
### Criar controller:
```
php artisan make:controller Api/v1/{{Table}}Controller --api
```
### Criar request:
```
php artisan make:request {{Table}}Request
```
### Criar policy:
```
php artisan make:policy {{Table}}Policy
```
### Criar service:
```
php artisan make:service {{Table}}
```
### Criar repository:
```
php artisan make:repository {{Table}}
```
### Criar factory:
```
php artisan make:factory {{Table}}
```
### Criar test:
```
php artisan make:test {{Table}}Test
```

----
