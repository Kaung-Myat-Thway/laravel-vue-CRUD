# Laravel and Vue CRUD

## Requirements

- PHP 7.4
- Apache 
- MySQL 8.0.27
- Composer 2.1.9
- Laravel 7

## Installation

Please check the official laravel installation guide for server requirements before you start.
[Official Documentation](https://laravel.com/docs/7.x)

Clone the repository
```
git clone https://github.com/Kaung-Myat-Thway/laravel-vue-CRUD.git
```
Switch to the repo folder
```
cd laravel-vue-CRUD
```
Install all the dependencies using composer
```
composer install
```
Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
Generate a new application key
```
php artisan key:generate
```
Run the database migrations (Set the database connection in .env before migrating)
```
php artisan migrate
```
Start the local development server
```
php artisan serve
```
You can now access the server at http://localhost:8000 

```



