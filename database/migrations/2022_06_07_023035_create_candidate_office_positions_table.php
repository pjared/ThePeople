<?php

use App\Models\Candidate;
use App\Models\Location;
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
        Schema::create('candidate_office_positions', function (Blueprint $table) {
            $table->foreignIdFor(Candidate::class, 'candidate_id');
            $table->foreignIdFor(PublicOfficePosition::class, 'office_id');
            $table->foreignIdFor(Location::class, 'location_id');
            $table->string('location_type');
            $table->year('year_start');
            $table->year('year_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_office_positions');
    }
};
