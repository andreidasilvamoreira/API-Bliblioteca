
---
# API Biblioteca

API REST desenvolvida em Laravel para gerenciamento de uma biblioteca, permitindo o controle de livros, autores e gêneros.

## 🛠️ Tecnologias
- PHP
- Laravel
- MySQL
- API REST

## 📂 Funcionalidades
- Cadastro, listagem, edição e remoção de livros
- Gerenciamento de autores
- Gerenciamento de gêneros
- Relacionamentos entre entidades

## 🧠 Conceitos aplicados
- Arquitetura MVC
- Repository Pattern
- Validações
- Migrations
- Relacionamentos Eloquent

## ▶️ Como executar o projeto
```bash
git clone https://github.com/andreidasilvamoreira/api-library-laravel
composer install
cp .env.example .env  || *mude as configurações no .env conforme seu banco de dados*
php artisan key:generate
php artisan migrate
php artisan serve
