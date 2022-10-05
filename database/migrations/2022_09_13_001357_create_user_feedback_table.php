<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('feedback_type');
            $table->string('feedback', 5000);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_feedback');
    }
};
