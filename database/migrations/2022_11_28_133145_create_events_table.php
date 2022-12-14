<?php

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
        Schema::create('events', function (Blueprint $table) {
    
            $table->BigIncrements('id');
            $table->date('date');
            $table->Integer('heure');
            $table->string('description');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('contact_id')->references('id')->on('contacts');
<<<<<<< HEAD
            $table->foreign('user_id')->references('id')->on('users');
=======
            $table->foreign('user_id')->references('id')->on('clients');
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
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
        Schema::dropIfExists('events');
    }
};
