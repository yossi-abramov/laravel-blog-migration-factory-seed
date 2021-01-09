# Laravel Blog with Migrations, Model Factories and Seeding

1) clone repository:<br>
<code>git clone https://github.com/yossi-abramov/laravel-blog-migration-factory-seed.git</code>
2) <code>cd /your/project/root</code>
3) install composer dependencies:
<code>composer install</code>
4) create DB (<code>CREATE DATABASE blog_example;</code>)
5) edit .env with your DB configs
6) generate application encryption key:
<code>php artisan key:generate</code>
7) check DB connection with <code>tinker</code>:<br>
<code>php artisan tinker</code><br>
<code>DB::connection()->getPdo()</code><br>
<code>exit</code>
8) run migrations:
<code>php artisan migrate</code> 
9) seed db:
<code>php artisan db:seed</code>
10) start server:
<code>php artisan serve</code>

Project now runs at: http://localhost:8000
