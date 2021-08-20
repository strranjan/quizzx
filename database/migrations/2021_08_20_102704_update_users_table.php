<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->boolean('is_admin')->default(0)->after('password');
            $table->boolean('is_user')->default(0)->after('is_admin');
            $table->boolean('is_subadmin')->default(0)->after('is_user');
            $table->boolean('is_buddy')->default(0)->after('is_subadmin');
            $table->boolean('is_active')->default(1)->after('is_buddy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
