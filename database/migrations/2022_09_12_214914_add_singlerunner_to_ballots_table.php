<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('ballots', function (Blueprint $table) {
            $table->boolean('has_single_runner')->default(false);
        });
    }

    public function down()
    {
        Schema::table('ballots', function (Blueprint $table) {
            $table->dropColumn('has_single_runner');
        });
    }
};
