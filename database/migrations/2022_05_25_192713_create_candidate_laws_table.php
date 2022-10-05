<?php

use App\Models\Candidate;
use App\Models\Law;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_law', function (Blueprint $table) {
            $table->foreignIdFor(Candidate::class, "candidate_id");
            $table->foreignIdFor(Law::class, "law_id");
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_laws');
    }
};
