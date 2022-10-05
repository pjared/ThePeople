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
        Schema::create('group_applications', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id');
            $table->string('name');
            $table->text('description');
            $table->string('email');
            $table->string('state');
            $table->string('location');
            $table->string('status', 15);
            $table->foreignIdFor(PoliticalGroup::class, 'group_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_applications');
    }
};
