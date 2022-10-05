<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_donor', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->integer('donor_id');
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_donor');
    }
};
