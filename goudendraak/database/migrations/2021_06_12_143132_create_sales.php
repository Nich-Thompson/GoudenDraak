<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('table')->nullable();
            $table->timestamps();
        });

        Schema::create('sale_dishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sales_id');
            $table->foreign('sales_id')
                ->references('id')
                ->on('sales');
            $table->unsignedBigInteger('dishes_id');
            $table->foreign('dishes_id')
                ->references('id')
                ->on('dishes');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('sales');
        Schema::dropIfExists('sale_dishes');
    }
}
