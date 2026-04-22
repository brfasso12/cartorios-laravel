# cartorios-laravel

# 📌 Sistema de Cadastro de Cartórios (CRUD)
Criado por: João Victor Silva Valente Lima

### ferramentas utilizadas no projeto
PHP 8.2.12
Laravel 12.56.0
MySQL
XAMPP (ambiente local com Apache e MySQL)
phpMyAdmin (gerenciamento do banco de dados)
VSCode (editor de código)
Composer (gerenciamento de dependências)

### Requisitos para a instalação
- PHP 8.2.12
- Composer 2.9.7
- Laravel Framework 12.56.0
- XAMPP 3.3.0 (Clicar em Apache + MySQL)
- MySQL (via phpMyAdmin)

### Passos para configurar o banco:
1. Inicie o XAMPP (Apache e MySQL)
2. Acesse o phpMyAdmin em: http://localhost/phpmyadmin
3. Crie um banco de dados chamado: cartorios
5. Configure o arquivo ".env" com:

DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
(substituindo o database existente por "laravel")

### RESUMO SIMPLES
✔ você usa XAMPP para rodar o servidor
✔ usa phpMyAdmin para ver/criar tabelas
✔ o projeto usa MySQL por baixo
#### Declarações e resumo do projeto

Este projeto consiste em um sistema de cadastro de cartórios desenvolvido em PHP com o framework Laravel, seguindo o padrão MVC e boas práticas de desenvolvimento web.
## Estrutura do projeto

O projeto segue o padrão **MVC (Model-View-Controller)**:

- **Models:** comunicação com o banco de dados (Cartorio e Municipio)
- **Controllers:** lógica das operações CRUD
- **Views (Blade):** interface do usuário

---

## Banco de dados ultilizado

O projeto utiliza MySQL, gerenciado através do phpMyAdmin (incluso no XAMPP).

### Tabelas importantes:

#### cartorios
- id
- nome (string)
- cnpj (string)
- tabeliao (string)
- municipio_id (foreign key)
- ativo (boolean)

#### municipios
- id
- nome
- 

---

## 🔗 Relacionamentos

- Um cartório pertence a um município (`belongsTo`)
- Um município pode ter vários cartórios (`hasMany`)

---

## ⚙️ Funcionalidades (CRUD completo)

✔ Listagem de cartórios  
✔ Cadastro de cartórios  
✔ Edição de cartórios  
✔ Exclusão de cartórios  

### Extras implementados:

- Seleção de município via banco de dados (select dinâmico)  
- Checkbox para status ativo/inativo  
- Máscara de CNPJ no formulário (frontend)  
- Formatação do CNPJ na listagem  
- Rotas no padrão REST do Laravel  

---

## 🎨 Interface

A interface foi construída utilizando Blade Templates do Laravel, com formulários simples e funcionais para cadastro e edição dos dados.

---

## ▶️ Como executar o projeto

### 1. Clonar o repositório
```bash
git clone <URL_DO_REPOSITORIO>
