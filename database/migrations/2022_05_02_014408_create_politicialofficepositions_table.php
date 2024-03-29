<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('public_office_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->tinyInteger('years_per_term')->unsigned();
            $table->tinyInteger('limit_terms')->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('public_office_positions');
    }
};
