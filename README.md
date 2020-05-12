# tweety
---
Build a twitter clone with Laracasts: https://laracasts.com/series/laravel-6-from-scratch
## Installation
> You must have PHP 7 installed as a prerequisite.

#### Step 1:
Clone this repository to your machine, and install all Composer dependencies.
```
git clone https://github.com/endonoh0/tweety
cd forum && composer install
cp .env.example .env
php artisan key:generate
npm install && npm run dev
```
#### Step 2:
Create a new database and reference its name and username/password within the project’s .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=
```

#### Step 3:
Migrate your database to create the required tables.
```
php artisan migrate:fresh --seed
```

#### Step 4: 
Visit http://tweety.test/ to create a new account and publish your first tweet!
