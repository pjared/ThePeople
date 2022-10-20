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
        Schema::table('laws', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('link');
            $table->tinyInteger('senate_yeas')->nullable();
            $table->tinyInteger('senate_nays')->nullable();
            $table->tinyInteger('senate_not_voting')->nullable();
            $table->smallInteger('house_yeas')->nullable();
            $table->smallInteger('house_nays')->nullable();
            $table->smallInteger('house_not_voting')->nullable();
            $table->string('senate_roll_link');
            $table->string('house_roll_link');
            $table->string('bill_id');
            $table->string('bill_status');
            $table->string('bill_link');
            $table->string('bill_title');
            $table->text('bill_summary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laws', function (Blueprint $table) {
            $table->string('name');
            $table->string('link');
        });
    }
};
