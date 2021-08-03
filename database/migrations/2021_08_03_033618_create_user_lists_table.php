<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique('username', 'users_username_unique');
            $table->string('email')->unique('email', 'users_email_unique');
            $table->string('password');
            $table->string('type');
            $table->char('phone')->unique('phone', 'users_phone_unique');   
            $table->date('dob');
            $table->string('profile');
            $table->char('address');   
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
        Schema::dropIfExists('user_lists');
    }
}
