<?php

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\User;
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
        Schema::create('user_flags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->foreignIdFor(Ballot::class, 'ballot_id');
            $table->string('type', 25);
            $table->integer('type_id');
            $table->string('flag_type', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_flags');
    }
};
