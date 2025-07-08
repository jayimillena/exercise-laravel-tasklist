exercise-laravel-tasklist
==========================

Author: Jay I. Millena  
GitHub: https://github.com/jaymillena  
Laravel Version: 12.x  
Status: Self-Training / Completed 
Hours: 4 hours and 36 minutes 27/27 modules

Description:
------------
This repository contains a simple Laravel 12 Task List application that serves as my personal self-training project.  
It is designed to help me learn Laravel from beginner to advanced level by exploring real-world functionality in a progressive way.

Goals:
------
- Learn the Laravel 12 framework and ecosystem.
- Apply MVC architecture in real-world scenarios.
- Practice CRUD (Create, Read, Update, Delete) operations.
- Learn routing, validation, Eloquent ORM, relationships, and more.
- Explore advanced features such as authentication, authorization, API development, and testing.

Features:
---------
- Task management (Add, Edit, Delete, Mark as complete)  
- Eloquent relationships (User ↔ Tasks)  
- Authentication (Laravel Breeze) *(Planned)*  
- REST API *(Planned)*  
- UI with TailwindCSS *(Optional enhancement)*

Installation:
-------------
1. Clone the repository:
   git clone https://github.com/jaymillena/exercise-laravel-tasklist.git

2. Navigate into the project:
   cd exercise-laravel-tasklist

3. Install dependencies:
   composer install

4. Copy the environment file:
   cp .env.example .env

5. Generate app key:
   php artisan key:generate

6. Configure your database in the `.env` file.

7. Run migrations:
   php artisan migrate

8. Serve the application:
   php artisan serve

Learning Reference:
-------------------
- Laravel Official Documentation: https://laravel.com/docs
- Laracasts: https://laracasts.com
- YouTube Tutorials and Personal Notes

Notes:
------
This project is actively being updated as I progress through the Laravel learning journey.  
Feel free to fork, give feedback, or suggest improvements.

License:
--------
This project is open-source and for educational purposes only.
