Sistema para lista de tarefas feito com laravel 9 e php 8.0, criado de forma básica, inclui um crud para tarefas e para categoria(tags), no mesmo foi criado uma pagina de login simples, não foi criado cadastro de usuario, criou-se apenas para complementar o mesmo, junto ao sistema foi criado rotas para api que retorna valores de tarefas e categorias(tags) confome abaixo:

Tarefa

GET: http://127.0.0.1:8000/api/tarefa
POST: http://127.0.0.1:8000/api/tarefa  
PUT:http://127.0.0.1:8000/api/tarefa/id	
DELETE: http://127.0.0.1:8000/api/tarefa/id

Categoria

GET: http://127.0.0.1:8000/api/categoria
POST: http://127.0.0.1:8000/api/categoria
PUT:http://127.0.0.1:8000/api/categoria/id	
DELETE: http://127.0.0.1:8000/api/categoria/id


Junto aos arquivos possui uma base de dados com nome de "TODO.SQL"

Para funcionar o sistema apenas reataurar a base e executar o projeto com comandos do laravel.
Obs: necessário ter PHP na  versão mais recente para roda-lo.
