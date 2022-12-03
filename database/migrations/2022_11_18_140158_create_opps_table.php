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
        Schema::create('opps', function (Blueprint $table) {
            $table->unsignedBigInteger('opportunite_id');
            $table->foreign('opportunite_id')->references('id')->on('opportunites');
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produit');
            $table->Integer('quantite');
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
        Schema::dropIfExists('opps');
    }
};
