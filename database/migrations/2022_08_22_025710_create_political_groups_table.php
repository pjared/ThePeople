<?php

use App\Models\Location;
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
        Schema::create('political_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('contact_email');
            $table->foreignIdFor(Location::class,'location_id')->nullable();
            $table->text('description')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('site_link')->nullable();
            $table->string('badge_url')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('slug')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('political_groups');
    }
};
