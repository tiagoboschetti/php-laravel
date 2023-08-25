![Logo AI Solutions](http://aisolutions.tec.br/wp-content/uploads/sites/2/2019/04/logo.png)

# AI Solutions

## Teste para novos candidatos (PHP/Laravel)

### Introdução

Este teste utiliza PHP 8.1, Laravel 10 e um banco de dados SQLite simples.

1. Faça o clone desse repositório;
1. Execute o `composer install`;
1. Crie e ajuste o `.env` conforme necessário
1. Execute as migrations e os seeders;

### Primeira Tarefa:

Crítica das Migrations e Seeders: Aponte problemas, se houver, e solucione; Implemente melhorias;

### Segunda Tarefa:

Crie a estrutura completa de uma tela que permita adicionar a importação do arquivo `storage/data/2023-03-28.json`, para a tabela `documents`. onde cada registro representado neste arquivo seja adicionado a uma fila para importação.

Feito isso crie uma tela com um botão simples que dispara o processamento desta fila.

Utilize os padrões que preferir para as tarefas.

Boa sorte!

---

## Summary

- About
- Requirements
- Getting Started
  - Cloning & Building
  - Environment Set Up

## Requirements

To make this little project work properly you'll need some tools!

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/gettingstarted)
- [Git](https://git-scm.com/downloads)
- [Postman](https://www.getpostman.com/apps)


## Getting Started
### 1. Cloning & Building
  **1.1.** Clone the repository:

  ```
   # git clone git@github.com:tiagoboschetti/php-lumen.git
   # git checkout master
  ```

  **1.2.** Then build & run the project using Docker Container:

  ```
   # docker-compose up --build -d
  ```
  ---

### 2. Environment Set Up
  **2.1.** Installing project dependencies:

  ```
   # docker exec -it php bash
   # composer install
  ```

  **2.3.** Running tests:

  The docker must be up in order for the tests to run properly.

  ```
   # docker exec -it php bash
   # ./vendor/bin/phpunit tests
  ```
  ---

    **3.2.** Executing the migrations (creating our database structure):

  ```
    # docker exec -it php bash
    # cp .env.example .env
    # php artisan migrate;
  ```

   **3.3.** Executing the seeders (creating our database structure):

  ```
    # docker exec -it php bash
    # cp .env.example .env
    # php artisan db:seed --class=CategorySeeder;
  ```

  Now the Application should be up and running on localhost listening on port 9090.
