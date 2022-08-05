<?php

use App\Models\Candidate;
use App\Models\ControversialOpinion;
use App\Models\ControversialStance;
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
        Schema::create('candidate_stances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->foreignIdFor(ControversialOpinion::class, 'controversial_opinion_id');
            $table->string('stance_label');
            $table->text('stance_reasoning')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_stances');
    }
};
