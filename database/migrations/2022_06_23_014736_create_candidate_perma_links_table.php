<?php

use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_perma_links', function (Blueprint $table) {
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->string('perma_link')->unique();
            $table->string('candidate_link');
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_perma_links');
    }
};
