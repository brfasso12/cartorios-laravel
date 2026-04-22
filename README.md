📌 Sistema de Cadastro de Cartórios (CRUD)

Criado por: João Victor Silva Valente Lima

### Ferramentas utilizadas no projeto

PHP 8.2.12
Laravel 12.56.0
MySQL
XAMPP (Apache + MySQL)
phpMyAdmin
VSCode
Composer

### Requisitos para instalação

Antes de rodar o projeto, certifique-se de ter instalado:
PHP 8.2.12 ou superior
Composer 2.9.7 ou superior
XAMPP 3.3.0 (Apache + MySQL ativos)
MySQL (via phpMyAdmin)

### Como fazer o projeto rodar
1. Clonar ou baixar o projeto

git clone https://github.com/brfasso12/cartorios-laravel.git

Depois entre na pasta:

cd cartorios-laravel

2. Instalar dependências do Laravel
composer install

3. Configurar o ambiente (.env)
Copie o arquivo de exemplo:

copie .env.example .env

Depois abra o arquivo .env e configure o banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
(modifique o database, colocando laravel)

4. Criar chave da aplicação
php artisan key:generate

6. Iniciar o XAMPP
Abra o XAMPP
Ative:
✔ Apache
✔ MySQL

8. Criar o banco de dados

Acesse:

http://localhost/phpmyadmin

Crie um banco chamado:
cartorios

7. Rodar as migrations (criação das tabelas)
php artisan migrate

8. Rodar as seeders
php artisan db:seed

9. Confira se está usando a pasta do projeto e inicie o servidor Laravel
php artisan serve

Acesse no navegador:

http://127.0.0.1:8000

### RESUMO SIMPLES

✔ XAMPP roda o servidor e banco
✔ phpMyAdmin gerencia o MySQL
✔ Laravel roda via artisan serve
✔ Composer instala dependências

### Declarações e resumo do projeto

Este projeto consiste em um sistema de cadastro de cartórios desenvolvido em PHP com o framework Laravel, seguindo o padrão MVC e boas práticas de desenvolvimento web.

### Estrutura do projeto

O projeto segue o padrão MVC (Model-View-Controller):

Models: comunicação com o banco de dados (Cartorio e Municipio)
Controllers: lógica das operações CRUD
Views (Blade): interface do usuário

### Banco de dados utilizado

O projeto utiliza MySQL, gerenciado através do phpMyAdmin (incluso no XAMPP).

### Tabelas principais

- cartorios
id
nome (string)
cnpj (string)
tabeliao (string)
municipio_id (foreign key)
ativo (boolean)
- municipios
id
nome
created_at
updated_at

Relacionamentos
Um cartório pertence a um município (belongsTo)
Um município pode ter vários cartórios (hasMany)

### Funcionalidades (CRUD completo)

✔ Listagem de cartórios
✔ Cadastro de cartórios
✔ Edição de cartórios
✔ Exclusão de cartórios
✔ Checkbox para Cartórios ativos ou inativos

### Extras implementados

Seleção de município via banco de dados (select dinâmico)
Checkbox para status ativo/inativo
Máscara de CNPJ no frontend
Formatação do CNPJ na listagem
Rotas REST padrão do Laravel
🎨 Interface

A interface foi construída utilizando Blade Templates do Laravel, com foco em simplicidade, funcionalidade e usabilidade..
