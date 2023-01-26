# Laravel Pivot Table.
# Add Extra Fields to Pivot Table

> table 'size' 
````
$table->string('nombre',60)->unique();
$table->string('descripcion',90)->nullable();
````
> table 'ingredients'
````
$table->string('nombre',60)->unique();
$table->string('descripcion',90)->nullable();
````
> table 'specialties'
````
$table->foreignId('size_id')->constrained('sizes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
$table->string('nombre',60)->unique();
$table->decimal('precio',10,3)->require();
````
> table 'specialty_ingredient'
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
* _Extra Fields._
~~~
$table->integer('cantidad');
$table->string('thing');
~~~
