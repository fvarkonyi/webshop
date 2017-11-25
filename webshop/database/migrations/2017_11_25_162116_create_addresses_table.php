<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses',function(Blueprint $table){
            $table->increments('id');
            $table->string('country', 50);
            $table->string('postal_code', 50);
            $table->string('city', 50);
            $table->string('route', 100);
            $table->string('street_number', 25);
            $table->integer('user_id');
            $table->string('address_type_id');
            $table->index('country');
            $table->index('city');
            $table->index('postal_code');
            $table->index(['city','route']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('address_type_id')->references('name')->on('address_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
