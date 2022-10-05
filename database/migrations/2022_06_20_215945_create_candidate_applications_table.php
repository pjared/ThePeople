<?php

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_applications', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id');
            $table->string('name');
            $table->date('dob');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('office_name');
            $table->string('state');
            $table->string('location');
            $table->string('status', 15);
            $table->date('entered_race_date')->nullable();
            $table->foreignIdFor(Candidate::class, 'candidate_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_applications');
    }
};
