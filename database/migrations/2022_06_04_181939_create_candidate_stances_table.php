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
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->foreignIdFor(ControversialStance::class, 'controversial_stance_id');
            $table->foreignIdFor(ControversialOpinion::class, 'controversial_opinion_id');
            $table->string('info')->nullable();
            $table->string('link'); //TODO: might have to change this to text
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
