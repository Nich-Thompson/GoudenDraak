<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->nullable();
            $table->char('number_addition')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', '6', '2');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->integer('spiciness')->nullable();
            $table->boolean('deliverable');
            $table->timestamps();
        });

        Schema::create('allergies', function (Blueprint $table) {
            $table->string('name', 45)->primary();
            $table->timestamps();
        });

        Schema::create('dish_allergies', function (Blueprint $table) {
            $table->unsignedBigInteger('dish_id');
            $table->string('allergy_name', 45);

            $table->foreign('dish_id')
                ->references('id')
                ->on('dishes');

            $table->foreign('allergy_name')
                ->references('name')
                ->on('allergies');
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('dishes');
        Schema::dropIfExists('allergies');
    }
}
