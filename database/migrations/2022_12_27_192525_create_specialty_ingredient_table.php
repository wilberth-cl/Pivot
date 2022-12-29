<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialty_ingredient', function (Blueprint $table) {
            $table->unsignedBigInteger('specialty_id');
            $table->unsignedBigInteger('ingredient_id');
            
            $table->integer('cantidad');
            $table->string('thing');

            $table->foreign('specialty_id')->references('id')->on('specialties')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('ingredient_id')->references('id')->on('ingredients')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_specialty');
    }
};
