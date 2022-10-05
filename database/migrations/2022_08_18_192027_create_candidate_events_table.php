<?php

use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidate_events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->string('event_name');
            $table->string('event_location');
            $table->text('event_description')->nullable();
            $table->dateTime('event_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_events');
    }
};
