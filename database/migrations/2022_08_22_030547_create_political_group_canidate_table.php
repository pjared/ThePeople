<?php

use App\Models\Candidate;
use App\Models\PoliticalGroup;
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
        Schema::create('political_group_canidate', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PoliticalGroup::class, 'political_group_id');
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('political_group_canidate');
    }
};
