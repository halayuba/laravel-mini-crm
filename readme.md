## Laravel - Mini CRM

- Author: Simon Bashir
- Version: 0.1.1
- Release Date: May 1st, 2019
- To see a hosted demo you can visit [ziffoo.com](http://www.ziffoo.com)

### Brief Description
Coded in `Laravel 5.8`, Mini CRM is a demo project.

### Basic Features
1. The tool will allow "Admin" users to perform CRUD operations.
2. The "AdminRoleMiddleware" middleware will block access to the "Managers" nav menu bar unless signed in as Admin.
3. Pivot table is used to store access permissions for the "Managers".
4. Policy is used to prevent performing delete action.
5. Seeders are used to prepopulate certain tables.
6. The "ValidateAndStoreUpload" repository is used to validate and store uploaded files.
7. Form validation, scope (in Models), view composer, markdown mail, flash messaging, and helper functions are used in this project.
8. TailwindCSS is used for layout design.
9. Vue.js is used in a few places.

### Screen Shots
Coming soon


### Disclaimer
Mini CRM is just for demo purposes. Although it is a work in progress with many more features to be added regularly, we offer no active support and we do not guarantee the stability of the code so be cautious not to use Mini CRM in any production environment.

### Setup Instructions
```
Mini CRM requires Laravel v5.8 (not tested with other versions).
```


* Clone this repository to your local drive
~~~
    git clone https://github.com/halayuba/laravel-mini-crm.git
~~~
* Install the composer dependencies: go to the folder that contains the download and run this command
~~~
    composer install
~~~
* Create a new database. The example below uses MYSQL (replace the * with the associated value)
~~~
    mysql -u*username -p*password
    CREATE DATABASE *db_name;
~~~
* Update .env to your specific needs (replace the * with the associated value)
~~~
    cp .env.example .env
    nano .env
    DB_HOST=localhost
    DB_DATABASE=*db_name
    DB_USERNAME=*username
    DB_PASSWORD=*password
~~~
* Run all migrations to create and populate the database tables
~~~
    php artisan migrate --seed
~~~
* For using the local driver for storage
~~~
    php artisan storage:link
~~~
* Run the following artisan commands
~~~
    npm install && npm run dev
~~~

### Roadmap
1. Coming soon.


### Maintainers & Contributors
- Simon Bashir (Designer and Developer)

### License
The project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
