<?php

use App\Models\Ballot;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('political_group_candidate', function (Blueprint $table) {
            $table->foreignIdFor(Ballot::class, 'ballot_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('political_group_candidate', function (Blueprint $table) {
            $table->dropColumn('ballot_id');
        });
    }
};
