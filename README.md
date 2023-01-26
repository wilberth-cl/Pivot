# Simple Example
# Add Extra Fields to Laravel Pivot Table.

### Make sure you have the laravel environment set up.
+ [Laravel](https://laravel.com/)
+ [Instalar Git](https://git-scm.com/download/win)
+ [Intalar Node.js](https://nodejs.org/en/)
+ [Instalar Composer](https://getcomposer.org/doc/00-intro.md#installation-windows)

### Php version[^1]:
> [PHP ^8.0.2](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/)

### These fields do not replace the id() & timestamps() fields, but are part of them.
> table 'size' (model & migration)
````
$table->string('nombre',60)->unique();
$table->string('descripcion',90)->nullable();
````
> table 'ingredients' (model & migration)
````
$table->string('nombre',60)->unique();
$table->string('descripcion',90)->nullable();
````
> table 'specialties' (model & migration)
````
$table->foreignId('size_id')->constrained('sizes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
$table->string('nombre',60)->unique();
$table->decimal('precio',10,3)->require();
````
> table 'specialty_ingredient' (migration)
````
$table->unsignedBigInteger('specialty_id');
            $table->unsignedBigInteger('ingredient_id');
$table->foreign('specialty_id')->references('id')->on('specialties')
            ->onDelete('cascade')
            ->onUpdate('cascade');
$table->foreign('ingredient_id')->references('id')->on('ingredients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
````
* _Extra Fields in 'specialty_ingredient'_
~~~
$table->integer('cantidad');
$table->string('thing');
~~~
### 

### The project contains two seeders to start with.
> IngredientSeeder & SizeSeeder
* the first time:
````
php artisan migrate --seed
````
* other times:
````
php artisan migrate:fresh --seed
````

[^1]: The version of php is extremely important.
