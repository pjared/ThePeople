<?php

use App\Models\Candidate;
use App\Models\Law;
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
        Schema::create('candidate_votes', function (Blueprint $table) {
            $table->id();
            $table->string('vote');
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->foreignIdFor(Law::class, 'law_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_votes');
    }
};
