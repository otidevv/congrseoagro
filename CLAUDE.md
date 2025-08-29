# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Laravel 12 application for "Congreso Agro" - an agricultural congress website. The project uses Vite for asset bundling and Tailwind CSS for styling.

## Key Commands

### Development
```bash
# Start development server with all services (Laravel server, queue worker, logs, and Vite)
composer run dev

# Or run services individually:
php artisan serve        # Laravel development server
npm run dev             # Vite development server
php artisan queue:listen --tries=1  # Queue worker
php artisan pail --timeout=0        # Live logs
```

### Build & Production
```bash
npm run build           # Build frontend assets with Vite
php artisan optimize    # Optimize application for production
```

### Testing
```bash
composer test           # Run PHPUnit tests (clears config first)
php artisan test       # Run tests directly
```

### Code Quality
```bash
./vendor/bin/pint      # Laravel Pint for PHP code formatting
```

### Database
```bash
php artisan migrate    # Run database migrations
php artisan migrate:fresh --seed  # Fresh migration with seeders
php artisan tinker    # Interactive PHP shell with Laravel context
```

### Artisan Commands
```bash
php artisan make:controller ControllerName
php artisan make:model ModelName -m  # Create model with migration
php artisan make:migration migration_name
php artisan make:seeder SeederName
```

## Architecture Overview

### Directory Structure
- **app/** - Core application code
  - **Http/Controllers/** - Request handlers
  - **Models/** - Eloquent ORM models
  - **Providers/** - Service providers
- **config/** - Configuration files for app, database, mail, etc.
- **database/** - Migrations, factories, and seeders
- **public/** - Public assets and entry point (index.php)
  - Contains extensive static assets for the congress website
- **resources/** - Views, CSS, and JavaScript source files
  - **views/** - Blade templates (currently has welcome.blade.php and layout structure)
- **routes/** - Route definitions (web.php for web routes)
- **storage/** - Application storage (logs, cache, sessions)
- **tests/** - Feature and Unit tests

### Tech Stack
- **PHP 8.2+** with Laravel 12
- **Frontend**: Vite, Tailwind CSS v4
- **Database**: Configured for SQLite by default (can be changed in .env)
- **Testing**: PHPUnit 11

### Key Configuration Files
- **composer.json** - PHP dependencies and scripts
- **package.json** - Node dependencies (Vite, Tailwind)
- **vite.config.js** - Vite bundler configuration
- **.env** - Environment variables (database, mail, etc.)

### Current State
- Basic Laravel installation with welcome page
- Extensive static assets in public directory for congress website
- No custom controllers or models beyond User model
- Database migrations for users, cache, and jobs tables ready