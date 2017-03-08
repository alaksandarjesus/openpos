<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employeeId', 50);
            $table->string('name', 50);
            $table->string('alias', 50)->unique();
            $table->string('password', 255);
            $table->string('mobile', 10)->unique();
            $table->integer('role_id');
            $table->string('token', 255)->nullable();
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
        //
         Schema::drop('users');
    }
}
