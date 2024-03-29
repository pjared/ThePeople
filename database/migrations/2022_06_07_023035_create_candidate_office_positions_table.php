<?php

use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_office_positions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->string('position_name');
            $table->text('description')->nullable();
            $table->year('year_start');
            $table->year('year_end');
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_office_positions');
    }
};
