<?php

use App\Models\PoliticalGroup;
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
        Schema::create('political_group_events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PoliticalGroup::class, 'political_group_id');
            $table->string('event_name');
            $table->string('event_location');
            $table->text('event_description')->nullable();
            $table->dateTime('event_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('political_group_events');
    }
};
