<?php

use App\Models\PoliticalGroup;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('group_organizers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(PoliticalGroup::class, 'political_group_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_organizers');
    }
};
