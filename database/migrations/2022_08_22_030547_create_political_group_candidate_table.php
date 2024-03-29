<?php

use App\Models\Candidate;
use App\Models\PoliticalGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('political_group_candidate', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PoliticalGroup::class, 'political_group_id');
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('political_group_candidate');
    }
};
