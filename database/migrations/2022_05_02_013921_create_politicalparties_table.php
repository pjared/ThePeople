<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('political_parties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('other_info')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('politicalparties');
    }
};
