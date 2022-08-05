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
        Schema::create('required_stances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ControversialOpinion::class, 'controversial_opinion_id');
            $table->string('label');
            $table->text('description');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('required_stances');
    }
};
