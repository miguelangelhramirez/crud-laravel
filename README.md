# LARAVEL 11 - BASIC CRUD USING LIVEWIRE AND TAILWIND

This is a basic CRUD (Create, Read, Update, Delete) application using Laravel 11, livewire 3 AND Tailwind.

I will show yoy how to build this project.

## What You Need
- A favorite text editor or IDE
- PHP >= 7.3
- Composer

## Setup A New Project 
Create a new Laravel project by using Composer:
```bash
composer create-project laravel/laravel laravel-crud
cd laravel-crud
composer require livewire/livewire
```

## Run migrations and seeders
```bash
php artisan migrate
php artisan db:seed
```

## run server
```bash
php artisan serve
```

## Default credentials
for login and test the application you need to access with default user
- **User**: admin@admin.com
- **Password**: 12345