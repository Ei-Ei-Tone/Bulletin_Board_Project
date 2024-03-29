<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique('username', 'users_username_unique');
            $table->string('email',191)->index();
            $table->string('password');
            $table->string('is_admin');
            $table->char('phone')->unique('phone', 'users_phone_unique');   
            $table->date('dob');
            $table->string('profile');
            $table->char('address'); 
            $table->integer('created_user_id');
            $table->integer('updated_user_id');
            $table->integer('deleted_user_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}


