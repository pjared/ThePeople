<?php

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_votes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Ballot::class, 'ballot_id');
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->boolean('is_valid')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_votes');
    }
};
