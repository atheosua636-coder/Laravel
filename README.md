# Simple POS — Customers and Users with Eloquent

A Laravel 12 POS sample app that displays customer and staff records from a database using Eloquent models.

## Requirements

- PHP 8.2 or newer
- Composer
- SQLite (enabled in PHP)
- Node.js and npm (only needed if rebuilding frontend assets)

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
```

The default configuration uses SQLite. Create its database file if it does not exist, then migrate and seed it:

```bash
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

Open the URL printed by `php artisan serve`, then visit `/customers` or `/users`.

To rebuild the CSS/JS assets, run `npm install` and `npm run build`.

## Database

- `customers`: `full_name`, `email`, and `phone`
- `users`: unique `username` and `full_name`

The `DatabaseSeeder` creates five sample customers and five sample users. The customer and user pages retrieve their records through `Customer::all()` and `User::all()`, then render Eloquent model properties in Blade.

To reset the local database and load the samples again:

```bash
php artisan migrate:fresh --seed
```

## Main files

- `app/Models/Customer.php` and `app/Models/User.php`
- `app/Http/Controllers/CustomerController.php` and `app/Http/Controllers/UserController.php`
- `database/migrations/`
- `database/seeders/DatabaseSeeder.php`
- `resources/views/customers/index.blade.php` and `resources/views/users/index.blade.php`
