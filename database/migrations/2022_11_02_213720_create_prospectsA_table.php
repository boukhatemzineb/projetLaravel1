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
        Schema::create('prospects', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nom',20);
            $table->string('prenom',20);
            $table->string('societe',50);
            $table->string('fonction',20);
            $table->string('email',30);
            $table->string('telephone',10);
            $table->text('adresse',40);
            $table->string('site',40);
            $table->string('statut',10);
            $table->string('source',30);
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
        Schema::dropIfExists('prospects');
    }
};
