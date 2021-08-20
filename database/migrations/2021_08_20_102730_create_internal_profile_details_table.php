<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternalProfileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_profile_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('full_name');
            $table->string('dob')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->integer('address_id')->unsigned()->nullable();
            $table->integer('postal_address_id')->unsigned()->nullable();
            $table->string('age')->nullable();
            $table->integer('gender_id')->nullable();
            $table->boolean('is_email_verified')->default(0);
            $table->string('profile_pic')->default('profile.png')->nullable();
            $table->string('nationality')->nullable();
            $table->string('blood_group')->nullable();
            $table->boolean('is_suspended')->default(0);
            $table->boolean('is_terminated')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internal_profile_details');
    }
}
