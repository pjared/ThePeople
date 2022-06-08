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
        Schema::create('controversial_opinions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description'); //TODO: might have to change this to text
            $table->string('first_side');
            $table->string('second_side');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controversial_opinions');
    }
};
