<?php

use App\Models\Candidate;
use App\Models\Politician;
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
        Schema::create('candidate_politician', function (Blueprint $table) {
            $table->foreignIdFor(Politician::class, 'politician_id');
            $table->foreignIdFor(Candidate::class, 'candidate_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('political_candidacies');
    }
};
