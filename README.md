# company task

## Description
* a company with departments, each department should have employee and manager, and their profiles (should include only the word profile) can be accessed by API through JWT or passport authentication.

* API should show without authentication each department with its employees and each manager with his/her employees.

## Deployment
* You do not have a `.env` file in the project root folder so copy `.env.example` and save it as `.env`
* In `.env` file update the database info
* In `.env` file add `L5_SWAGGER_GENERATE_ALWAYS=true`
* Open the terminal or command prompt and navigate to the project directory and run `composer update`
* Generate the application key using `php artisan key:generate`
* Generate the JWTAuth secret key using `php artisan jwt:secret`
* Clear the config cache by running `php artisan config:cache`
* Create the tables by running `php artisan migrate`
* Fill the tables with data by running `php artisan db:seed`
