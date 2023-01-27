## Simple Example
## Add Extra Fields to Laravel Pivot Table.

<p align="center">
<img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/wilberth-cl/pivot">
</p>

## Make sure you have the laravel environment set up.

+ [Laravel](https://github.com/laravel/laravel)
+ [Is required Git](https://git-scm.com/download/win)
+ [Is required Node.js](https://nodejs.org/en/)
+ [Is required Composer](https://getcomposer.org/doc/00-intro.md#installation-windows)

### Php version[^1]:
> [PHP ^8.0.2](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/)

## Immediately after cloning the repository, you need to run the following commands[^2].
~~~
npm install
~~~
~~~
composer install
~~~

## These fields do not replace the id() & timestamps() fields, but are part of them.

* table 'size' (model & migration)
~~~
$table->string('nombre',60)->unique();
$table->string('descripcion',90)->nullable();
~~~
* table 'ingredients' (model & migration)
~~~
$table->string('nombre',60)->unique();
$table->string('descripcion',90)->nullable();
~~~
* table 'specialties' (model & migration)
~~~
$table->foreignId('size_id')->constrained('sizes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
$table->string('nombre',60)->unique();
$table->decimal('precio',10,3)->require();
~~~
* table 'specialty_ingredient' (migration)
~~~
$table->unsignedBigInteger('specialty_id');
            $table->unsignedBigInteger('ingredient_id');
$table->foreign('specialty_id')->references('id')->on('specialties')
            ->onDelete('cascade')
            ->onUpdate('cascade');
$table->foreign('ingredient_id')->references('id')->on('ingredients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
~~~
> Extra Fields in 'specialty_ingredient'
~~~
$table->integer('cantidad');
$table->string('thing');
~~~

## The project contains two seeders to start with[^3].
> IngredientSeeder & SizeSeeder
* the first time:
~~~
php artisan migrate --seed
~~~
* other times:
~~~
php artisan migrate:fresh --seed
~~~

## Test it[^4].
~~~
php artisan serve
~~~

## Entry route. 
~~~
http://127.0.0.1:8000/admin
~~~

[^1]: The version of php is extremely important.
[^2]: Using npm update or composer update would cause some problems.
[^3]: Create a database on your local server and configure it in your .env file.
[^4]: The *npm run dev on *npm run build commands are not required, but you could run *npm run build for more convenience.
