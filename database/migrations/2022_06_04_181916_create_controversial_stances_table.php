<?php

use App\Models\ControversialOpinion;
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
        Schema::create('controversial_stances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(ControversialOpinion::class, 'controversial_opinion_id');
            $table->string('description'); //TODO: might have to change this to text
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controversial_stances');
    }
};
