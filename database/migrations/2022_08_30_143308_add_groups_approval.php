<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('political_groups', function (Blueprint $table) {
            $table->boolean('can_back_candidates')->default(0);
        });
    }

    public function down()
    {
        Schema::table('political_groups', function (Blueprint $table) {
            $table->dropColumn('can_back_candidates');
        });
    }
};
