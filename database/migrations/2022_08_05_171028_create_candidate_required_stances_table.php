<?php

use App\Models\Candidate;
use App\Models\RequiredStance;
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
        Schema::create('candidate_required_stances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RequiredStance::class, 'required_stance_id');
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->text('candidate_reasoning')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_required_stances');
    }
};
