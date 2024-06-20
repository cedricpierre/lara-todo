# Hello

This project uses Laravel Sail.

After installation with `composer install` and configuration of the .env file, run `vendor/bin/sail up -d`.

Run the migrations

`vendor/bin/sail artisan migrate:fresh --seed`

You can now use the API.

Here are the routes.

```
GET|HEAD   api/projects ................ ProjectsController@index
POST       api/projects ................ ProjectsController@store
POST       api/todos ...................... TodosController@store
GET|HEAD   api/todos ...................... TodosController@index
GET|HEAD   api/todos/{todo} ................ TodosController@show
PATCH      api/todos/{todo} .............. TodosController@update
DELETE     api/todos/{todo} ............. TodosController@destroy
```
