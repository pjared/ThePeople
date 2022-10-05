<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('state', 20)->nullable();
            $table->string('age_range', 10)->nullable();

            $table->string('google_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('socialite_token')->nullable();
            $table->string('socialite_refresh_token')->nullable();
            $table->string('last_visited')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
