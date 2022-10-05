<?php

use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_opinions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->string('name');
            $table->text('stance')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opinions');
    }
};
