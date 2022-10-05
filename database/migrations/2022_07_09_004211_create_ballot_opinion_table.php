<?php

use App\Models\Ballot;
use App\Models\ControversialOpinion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ballot_opinion', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Ballot::class, 'ballot_id');
            $table->foreignIdFor(ControversialOpinion::class, 'controversial_opinion_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ballot_opinion');
    }
};
