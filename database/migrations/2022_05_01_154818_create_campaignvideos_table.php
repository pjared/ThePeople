<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('campaign_videos', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->string('link');
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('campaign_videos');
    }
};
