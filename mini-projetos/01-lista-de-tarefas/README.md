# Mini projeto 1: lista de tarefas

O repositório traz arquivos de partida para um CRUD pequeno. Copie os exemplos de `app/`, `database/`, `routes/` e `resources/` para os mesmos caminhos de uma aplicação Laravel criada com Composer. Renomeie a migration para incluir o timestamp exigido pelo Laravel e incorpore as rotas ao `routes/web.php` da aplicação.

Configure o banco no `.env`, execute `php artisan migrate`, inicie com `php artisan serve` e acesse `/tasks`. O título é validado no controller e os formulários incluem CSRF.