# Laravel-POS

**TFA1 Laravel POS Application**

A simple Point-of-Sale (POS) application developed using the Laravel framework. This project demonstrates Laravel's Model-View-Controller (MVC) architecture, routing, controllers, Blade templates, and static PHP arrays.

## Application Pages

The application contains four main pages:

- **Home** – Landing page of the Laravel POS application.
- **About** – Provides information about the system and technologies used.
- **Customer Accounts** – Displays sample customer records, including their ID, full name, email, and phone number.
- **User Accounts** – Displays sample system user records, including their ID, username, and full name.

## Technologies Used

- PHP
- Laravel 12
- Blade Templates
- HTML and CSS
- Git and GitHub

## Project Structure

```text
app/
└── Http/
    └── Controllers/
        ├── PageController.php
        ├── CustomerController.php
        └── UserController.php

resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── home.blade.php
    ├── about.blade.php
    ├── customers.blade.php
    └── users.blade.php

routes/
└── web.php
```

## Installation and Setup

1. Clone this repository:

   ```bash
   git clone https://github.com/winfred001300/Laravel-POS.git
   ```

2. Navigate to the project directory:

   ```bash
   cd Laravel-POS
   ```

3. Install the project dependencies:

   ```bash
   composer install
   ```

4. Create your environment file:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

7. Open the application in your browser:

   ```text
   http://127.0.0.1:8000
   ```

## Learning Objectives

This project demonstrates the following Laravel concepts:

- Creating and configuring application routes.
- Implementing controllers to handle application requests.
- Creating and organizing Blade view files.
- Passing static PHP arrays from controllers to views.
- Using the `@foreach` directive to display multiple records.
- Implementing navigation links between application pages.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. It simplifies common web development tasks, including routing, database interactions, session management, and application structure.

For more information, visit the official [Laravel Documentation](https://laravel.com/docs).

## License

This project is developed for academic purposes as part of the TFA1 activity.
