<?php

use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_promises', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->string('promise');
            $table->text('plan')->nullable();
            $table->unsignedTinyInteger('order')->default(100);
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_promises');
    }
};
