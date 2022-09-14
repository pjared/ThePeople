<?php

use App\Models\Ballot;
use App\Models\Candidate;
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
        Schema::create('running_candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->foreignIdFor(Ballot::class, 'ballot_id');
            $table->date('entered_race_date')->nullable();
            $table->date('ended_race_date')->nullable();
            $table->boolean('show')->default(0);
            $table->unsignedTinyInteger('order')->default(100);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('running_candidates');
    }
};
