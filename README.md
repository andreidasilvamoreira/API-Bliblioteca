# 📚 Library API

REST API developed with **Laravel** to manage a library system, allowing the control of books, authors, and genres.

## 🛠️ Technologies
- PHP
- Laravel
- MySQL
- REST API

## 📂 Features
- Create, list, update, and delete books
- Author management
- Genre management
- Entity relationships

## 🧠 Applied Concepts
- MVC architecture
- Repository Pattern
- Data validation
- Database migrations
- Eloquent relationships

## ▶️ How to run the project

```bash
git clone https://github.com/andreidasilvamoreira/api-library-laravel
composer install
cp .env.example .env # Update the .env file with your database credentials
php artisan key:generate
php artisan migrate
php artisan serve
