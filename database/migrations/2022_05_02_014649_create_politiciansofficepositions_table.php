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
        Schema::create('politician_office_positions', function (Blueprint $table) {
            $table->integer('politician_id');
            $table->integer('public_office_id');
            $table->integer('location_id');
            $table->string('location_type');
            $table->year('year_start');
            $table->year('year_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('politician_office_positions');
    }
};
