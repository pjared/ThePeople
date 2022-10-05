<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('controversial_opinions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->integer('votes')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('controversial_opinions');
    }
};
