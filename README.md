<p align="center">Laravel Portfolio</p>
<br>

## Introduction
- This project consist of the implementation of a generic portfolio site, using Laravel 9 and Bootstrap 5. It is the first basic project made to learn and use Laravel.


## Tech Stack

<div align="center">
<img width="70" src="https://raw.githubusercontent.com/gilbarbara/logos/master/logos/laravel.svg"/>
<img width="70" src="https://github.com/devicons/devicon/blob/master/icons/bootstrap/bootstrap-plain.svg"/>                 
</div>


## Deployment
- Clone project
```
git clone https://github.com/prom97/laravel-portfolio.git
```
- Install dependencies from composer.json and package.json (inside the project directory)
```
composer install
```
```
npm install
```
```
npm run dev
```
- Create a new database and config your .env file (line 11 for reference)
  - Default Database name: portfolio
  - If the .env file does not exist:
 
 ```
 cp .env.example .env
 ```
```
DB_CONNECTION=<your_db_connection>
DB_HOST=<your_host>
DB_PORT=<your_port>
DB_DATABASE=<your_database_name>
DB_USERNAME=<your_username>
DB_PASSWORD=<your_password>
```
- Run migrations to set your db tables structure and seed it with pre-built factories
```
php artisan migrate --seed
```
- Serve it
```
php artisan serve
```
- Default user
```
email: mail@admin.com
pass: admin123
```

- If you have any 500 Server error, try CTRL+C and then
```
php artisan cache:clear
```
```
composer dump-autoload
```
```
php artisan key:generate
```
