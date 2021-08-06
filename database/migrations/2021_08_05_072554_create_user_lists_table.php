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
            $table->string('user_name')->unique('username', 'users_username_unique');
            $table->string('user_email',191)->index();
            $table->string('password');
            $table->string('type');
            $table->char('phone')->unique('phone', 'users_phone_unique');   
            $table->date('dob');
            $table->string('profile');
            $table->char('address');  
            $table->integer('created_user_id');   
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
