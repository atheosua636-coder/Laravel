# Simple POS and Tasks for Today

A Laravel 12 project that combines a small point-of-sale directory with a task-management module. POS customers and staff, tasks, and the single task-profile user are stored in SQLite and retrieved through Eloquent.

## Requirements

- PHP 8.2 or newer with SQLite enabled
- Composer
- Node.js and npm only if rebuilding frontend assets

## Setup (Windows PowerShell)

Run these commands from the folder containing `artisan`:

```powershell
composer install
if (!(Test-Path .env)) { Copy-Item .env.example .env }
php artisan key:generate
if (!(Test-Path database\database.sqlite)) { New-Item -ItemType File -Path database\database.sqlite | Out-Null }
php artisan migrate --seed
php artisan serve
```

Open the local URL printed by `php artisan serve`. The default database connection is SQLite.

For macOS or Linux, create the database file with `touch database/database.sqlite` in place of the PowerShell `New-Item` command.

## Pages

- `/` — Welcome page with only tasks scheduled for today
- `/tasks` — All tasks, ordered by task date
- `/profile` — The single user profile seeded for the task assessment
- `/about` — Static project page identifying the developer
- `/pos` — POS landing page
- `/customers` — POS customer records
- `/users` — POS staff records

## Database and seeding

- `customers`: full name, email, and phone; five sample customers
- `users`: unique username, full name, and email; exactly one task-profile user
- `pos_staff`: unique username and full name; five POS staff records, kept separate so the task assessment can seed exactly one `users` record
- `tasks`: title, status (defaults to `pending`), task date, and timestamps; eight sample tasks across four dates, including today

The task welcome page filters with Eloquent for today's date. The full task list retrieves every task and orders by date. Timestamps are set automatically when the seeder creates Eloquent models.

To rebuild the database and reload all sample records:

```powershell
php artisan migrate:fresh --seed
```

To rebuild frontend assets, run `npm install` and `npm run build`.

## Main source files

- Models: `app/Models/Customer.php`, `app/Models/PosStaff.php`, `app/Models/Task.php`, `app/Models/User.php`
- Controllers: `app/Http/Controllers/CustomerController.php`, `PageController.php`, `ProfileController.php`, `TaskController.php`, `UserController.php`
- Database: `database/migrations/`, `database/seeders/DatabaseSeeder.php`
- Views: `resources/views/`
