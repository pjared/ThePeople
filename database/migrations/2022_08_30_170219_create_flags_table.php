<?php

// use App\Models\Ballot;
// use App\Models\Candidate;
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
        Schema::create('flags', function (Blueprint $table) {
            $table->increments('id');
            // $table->foreignIdFor(Candidate::class, 'candidate_id');
            // $table->foreignIdFor(Ballot::class, 'ballot_id');
            $table->foreignIdFor(User::class, 'user_id')->nullable();
            $table->morphs('flaggable');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('flags');
    }
};
