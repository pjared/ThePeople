<?php

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
        Schema::table('candidate_donor', function (Blueprint $table) {
            $table->dropColumn('donor_id');
            $table->decimal('total', 10, 2);
            $table->text('top_5_groups');
            $table->text('top_5_states');
            $table->text('top_5_donors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidate_donor', function (Blueprint $table) {
            $table->foreignId('donor_id');
            $table->dropColumn('total');
            $table->dropColumn('top_5_groups');
            $table->dropColumn('top_5_states');
            $table->dropColumn('top_5_donors');
        });
    }
};
