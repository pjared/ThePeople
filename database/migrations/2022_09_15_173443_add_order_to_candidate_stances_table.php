<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('candidate_stances', function (Blueprint $table) {
            $table->unsignedTinyInteger('order')->default(100);
        });
    }

    public function down()
    {
        Schema::table('candidate_stances', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
