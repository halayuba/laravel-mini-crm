## Laravel - Mini CRM

- Author: Simon Bashir
- Version: 0.72 (2020.02.23)
- First release Date: May 1st, 2019
- To see a hosted demo you can visit [flexcrm.app](https://flexcrm.app)

### Brief Description
Coded in `Laravel 5.8`, Mini CRM is a demo project based on a request for a [code test](http://flexcrm.app/code-test).

### Basic Features
1. The tool will allow "Admin" users to perform CRUD operations on Companies, Employees, and Managers.
2. The "AdminRoleMiddleware" middleware will block access to the "Managers" nav menu bar unless signed in as Admin.
3. A pivot table is used to store access permissions for "Managers". So, Managers will only have a restricted view based on the companies they’ve been given access to.
4. Authorization using Laravel "Gate" is used to restrict user actions (for example to prevent performing delete action on Companies).
5. Migrations to create schema and DB structure and Seeders (including factories) are used to pre-populate certain tables.
6. The "ProcessFileUpload" repository is used to validate and store uploaded files to the local storage folder that is publicly accessible.
7. Contains many useful concepts: Filters, form validation, scope (in Models), view composer, blade service provider, markdown mail, flash messaging, pagination, and helper functions are used in this project.
8. TailwindCSS is used for the CSS layout design.
9. Vue.js is used to allow previewing image (logo) in the form (client-side and before uploading to the back-end). Vue.js is also used in a few other places (for example, showing/hiding tooltips).
10. Simple Admin dashboard for updating password.

### Screen Shots of all features
visit [flexcrm.app](https://flexcrm.app/features)


### Disclaimer
Mini CRM is just for demo purposes. Although it is a work in progress with many more features to be added regularly, we offer no active support and we do not guarantee the stability of the code so be cautious not to use Mini CRM in any production environment.

### Setup Instructions
```
Mini CRM was built with Laravel v5.8 (not tested with other versions).
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
    DB_HOST=localhost
    DB_DATABASE=*db_name*
    DB_USERNAME=*username*
    DB_PASSWORD=*password*
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
- ~~Add filters.~~
- ~~Admin dashboard.~~
- Responsive design: WIP - many improvements had been made for this release.
- Expand functionality to include basic Customer Care and Billing.
- Additional form validation (including client-side validation).
- Expand on Admin dashboard.
- You have an idea? Let me know.

### Maintainers & Contributors
- Simon Bashir (Designer and Developer)

### License
The project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
