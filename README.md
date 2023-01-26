# Laravel Pivot Table.
# Add Extra Fields to Pivot Table.

### 
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
