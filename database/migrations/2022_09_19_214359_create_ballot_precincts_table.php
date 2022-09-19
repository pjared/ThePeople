<?php

use App\Models\Ballot;
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
        Schema::create('ballot_precincts', function (Blueprint $table) {
            $table->id();
            $table->string('precinct_id');
            $table->foreignIdFor(Ballot::class, 'ballot_id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ballot_precincts');
    }
};
