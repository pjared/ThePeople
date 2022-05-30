<?php

use App\Models\Candidate;
use App\Models\PublicOfficePosition;
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
        Schema::create('running_candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->foreignIdFor(PublicOfficePosition::class, 'public_office_id');
            $table->integer('location_id')->unsigned();
            $table->string('location_type', 50);
            $table->boolean('race_is_over');
            $table->date('entered_race_date')->nullable();
            $table->date('ended_race_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('running_candidates');
    }
};
