# Laravel E-commerce Demo

This is a Laravel-based e-commerce demo project using Livewire and Tailwind CSS.

## Prerequisites

- PHP 8.1+
- Composer
- Node.js and npm
- MySQL or another database supported by Laravel

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/livewire-ecommerce-demo.git
   cd livewire-ecommerce-demo
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install and compile frontend dependencies:
   ```
   npm install
   npm run dev
   ```

4. Create a copy of the .env file:
   ```
   cp .env.example .env
   ```

5. Generate an application key:
   ```
   php artisan key:generate
   ```

6. Configure your database in the .env file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

7. Run database migrations and seed the database:
   ```
   php artisan migrate --seed
   ```

8. Create a symbolic link for storage:
   ```
   php artisan storage:link
   ```

9. Start the development server:
   ```
   php artisan serve
   ```

You can now access the application at `http://localhost:8000`.

## Features

- Product listing with filters
- Shopping cart functionality
- Responsive design with Tailwind CSS
- Real-time updates with Livewire

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)