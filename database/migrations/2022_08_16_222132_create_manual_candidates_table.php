<?php

use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('manual_candidates', function (Blueprint $table) {
            $table->foreignIdFor(Candidate::class, 'candidate_id')->unique();
            $table->string('note')->nullable();
            $table->text('sources')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('manual_candidates');
    }
};
