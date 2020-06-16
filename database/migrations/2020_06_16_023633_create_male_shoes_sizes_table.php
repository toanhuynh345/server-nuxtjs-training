<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaleShoesSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('male_shoes_sizes', function (Blueprint $table) {
            $table->id();
            $table->decimal('foot_size_cm')->nullable();
            $table->decimal('foot_size_inch')->nullable();
            $table->string('size_uk')->nullable();
            $table->string('size_us')->nullable();
            $table->string('size_vn')->nullable();
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
        Schema::dropIfExists('male_shoes_sizes');
    }
}
