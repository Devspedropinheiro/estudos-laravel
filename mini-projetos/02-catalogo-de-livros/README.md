# Mini projeto 2: catÃ¡logo de livros

Objetivo: praticar migrations, validaÃ§Ã£o, CRUD e consultas.

1. Criar tabelas `authors` e `books`, com chave estrangeira de livro para autor.
2. Criar os models e os relacionamentos `Author::hasMany(Book::class)` e `Book::belongsTo(Author::class)`.
3. Implementar cadastro, ediÃ§Ã£o, remoÃ§Ã£o e busca por tÃ­tulo.
4. Mostrar autor, tÃ­tulo e ano em uma view Blade.
5. Executar `php artisan migrate` e `php artisan serve`.