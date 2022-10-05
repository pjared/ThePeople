<?php

use App\Models\Ballot;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->date('dob')->nullable();
            $table->date('signup_date')->nullable();
            $table->text('bio')->nullable();
            $table->string('state', 20);
            $table->string('contact_email')->nullable();
            $table->string('contact_phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('party_name')->nullable();
            $table->foreignIdFor(User::class, 'user_id')->nullable();
            $table->string('site_link')->nullable();
            $table->string('slug')->nullable();

            $table->foreignIdFor(Ballot::class, 'ballot_id')->nullable();
            $table->boolean('show')->default(0);
            $table->unsignedTinyInteger('order')->default(100);

            $table->boolean('is_current')->default(1);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
