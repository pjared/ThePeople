<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('political_groups', function (Blueprint $table) {
            $table->string('sentence_overview')->nullable();
        });
    }

    public function down()
    {
        Schema::table('political_groups', function (Blueprint $table) {
            $table->dropColumn('sentence_overview');
        });
    }
};
