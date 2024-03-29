<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->string('state', 20)->change();
        });
    }

    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            //
        });
    }
};
