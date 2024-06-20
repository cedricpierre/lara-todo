# Hello

This project uses Laravel Sail.

After installation and configuration of the .env file, run `vendor/bin/sail up -d` and navigate to the localhost address.

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
