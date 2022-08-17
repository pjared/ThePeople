<?php

use App\Models\User;
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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->date('signup_date');
            $table->text('bio')->nullable();
            $table->string('state', 20);
            $table->string('contact_email');
            $table->string('contact_phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('party_name')->nullable();
            $table->foreignIdFor(User::class, 'user_id')->nullable();
            $table->string('site_link')->nullable();
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
        Schema::dropIfExists('candidates');
    }
};
