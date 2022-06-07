<?php

use App\Models\Location;
use App\Models\PublicOfficePosition;
use App\Models\RunningCandidates;
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
        Schema::create('ballots', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Location::class, 'location_id');
            $table->foreignIdFor(PublicOfficePosition::class, 'public_office_id');
            $table->date('voting_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ballots');
    }
};