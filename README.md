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

  ### 3. Database Set Up
  **3.1.** Creating database (couldn't make it work in mysql due to a driver problem that I couldn't solve in any way):

  ```
    # docker exec -it postgres bash
    # psql -U postgres
    # create database postgres;
    # \connect postgres;
    # \q
  ```

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
    # php artisan db:seed --class=CategorySeeder
  ```

  The Application should be up on port 9090.

  ## 4. Documentation

  ### 4.1 Importing documents.

  **POST** -> `http://localhost:9090/api/import`

  Body:
  ```
    {
    "exercicio": 2023,
    "documentos": [
        {
           "categoria":  "Remessa",
           "titulo": "Eget mi proin sed libero enim",
           "conteúdo": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo quis. At elementum eu facilisis sed odio morbi. Nec ullamcorper sit amet risus nullam eget. Ultrices neque ornare aenean euismod elementum. Eget mi proin sed libero enim. Diam in arcu cursus euismod quis viverra nibh. Quis enim lobortis scelerisque fermentum dui. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Dolor sed viverra ipsum nunc. Sed adipiscing diam donec adipiscing tristique. Feugiat in fermentum posuere urna. Cursus in hac habitasse platea dictumst quisque sagittis purus sit. Interdum consectetur libero id faucibus nisl tincidunt eget nullam. Dui vivamus arcu felis bibendum ut tristique et egestas. Congue quisque egestas diam in arcu cursus euismod quis viverra. Sit amet consectetur adipiscing elit ut aliquam purus. At in tellus integer feugiat. Morbi non arcu risus quis varius quam. Bibendum enim facilisis gravida neque. Vulputate sapien nec sagittis aliquam malesuada. Volutpat ac tincidunt vitae semper quis lectus. Vulputate sapien nec sagittis aliquam. Pellentesque habitant morbi tristique senectus et netus et. Quis vel eros donec ac odio tempor."
        },
        {
           "categoria":  "Remessa Parcial",
           "titulo": "Interdum consectetur libero",
           "conteúdo": "At quis risus sed vulputate odio. Nisi est sit amet facilisis magna etiam. Aliquam sem et tortor consequat id. Eget magna fermentum iaculis eu non. Feugiat pretium nibh ipsum consequat nisl vel pretium lectus quam. Turpis in eu mi bibendum neque egestas. Ac turpis egestas sed tempus urna. Facilisis gravida neque convallis a cras semper auctor. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Laoreet id donec ultrices tincidunt. Leo duis ut diam quam nulla porttitor. Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Ut faucibus pulvinar elementum integer enim. Interdum velit euismod in pellentesque massa placerat duis. Augue mauris augue neque gravida in fermentum et sollicitudin ac. Justo donec enim diam vulputate ut pharetra sit. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Faucibus purus in massa tempor nec. Id leo in vitae turpis massa. Ipsum nunc aliquet bibendum enim. Sed odio morbi quis commodo. In est ante in nibh mauris. Quam nulla porttitor massa id neque aliquam vestibulum morbi."
        },
        {
           "categoria":  "Remessa",
           "titulo": "Eget mi proin sed libero enim",
           "conteúdo": "Elementum integer enim neque volutpat ac. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Facilisi morbi tempus iaculis urna. Lorem donec massa sapien faucibus et molestie ac. Nunc lobortis mattis aliquam faucibus purus in massa. Vitae purus faucibus ornare suspendisse sed nisi. Urna nunc id cursus metus aliquam eleifend. Accumsan tortor posuere ac ut consequat semper viverra nam libero. Mauris pharetra et ultrices neque ornare aenean euismod elementum nisi. Adipiscing diam donec adipiscing tristique risus. Blandit volutpat maecenas volutpat blandit aliquam etiam erat. Purus viverra accumsan in nisl nisi scelerisque eu. Euismod in pellentesque massa placerat duis. Cursus risus at ultrices mi. Non quam lacus suspendisse faucibus interdum. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Est pellentesque elit ullamcorper dignissim cras tincidunt. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. Turpis cursus in hac habitasse. Massa massa ultricies mi quis hendrerit dolor magna. Et tortor consequat id porta nibh venenatis cras sed."
        }
    ]
  }
  ```
Intended response:

  ```
    "Documents imported successfully!"
  ```
---

