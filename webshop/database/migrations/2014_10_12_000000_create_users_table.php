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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('user_name',50)->unique();
            $table->string('phone',25)->nullable();
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->date('last_visited_at')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'disabled'])->default('pending');            
            $table->rememberToken();
            $table->timestamps();
            $table->index(['last_name','first_name']);
            $table->index('phone');
            $table->index('last_visited_at');
            $table->index('created_at');
            $table->index('updated_at');
            $table->index('status');
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
