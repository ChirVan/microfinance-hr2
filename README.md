# Microfinance HR System

A comprehensive HR management system for microfinance institutions, built with Laravel.

## Features

- Employee management
- Payroll processing
- Leave management
- Performance tracking
- Document management
- Reporting and analytics
- Training Management
- Competency Management
- Succession Planning
- Learning Management
- Employee Self Service

## Requirements

- PHP 8.2+
- MySQL 5.7+ or MariaDB 10.3+
- Composer
- Node.js and NPM

## Installation

1. Clone the repository
   ```
   git clone https://github.com/ChirVan/microfinance-hr2.git
   ```

2. Install dependencies
   ```
   composer install
   npm install
   ```

3. Set up environment file
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure database in .env file

5. Run migrations
   ```
   php artisan migrate
   ```

6. Compile assets
   ```
   npm run dev
   ```

7. Start the server
   ```
   php artisan serve
   ```

## Docker Setup

This project supports Docker deployment for production environments:

```bash
# Build and start containers
docker-compose up -d

# Run migrations inside container
docker-compose exec app php artisan migrate
```

## Contributing

Please read our contributing guidelines before submitting a pull request.

## License

[MIT License](LICENSE)