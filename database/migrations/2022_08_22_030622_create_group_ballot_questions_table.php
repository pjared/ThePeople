<?php

use App\Models\Ballot;
use App\Models\PoliticalGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('group_ballot_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PoliticalGroup::class, 'political_group_id');
            $table->foreignIdFor(Ballot::class, 'ballot_id');
            $table->string('question');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_ballot_questions');
    }
};
