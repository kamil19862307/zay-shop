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
        Schema::create('featureds', function (Blueprint $table) {
            $table->id();

//            $table->decimal('price')->unsigned();// Для цен и валют decimal более удобный тип данных, не округляет значения
            $table->integer('price')->unsigned();
            $table->integer('stars')->default(5);
            $table->string('title');
            $table->text('preview');
            $table->text('description');
            $table->integer('reviews');
            $table->text('thumbnail')->nullable();

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
        Schema::dropIfExists('featureds');
    }
};
