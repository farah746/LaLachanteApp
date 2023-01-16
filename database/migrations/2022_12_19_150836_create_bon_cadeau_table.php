<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonCadeauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('Bon_cadeau', function (Blueprint $table) {

            $table->string('id_bonCadeau');
            $table->string('nom_destinataire');
            $table->string('titre');
            $table->string('message');
            $table->string('id_experience');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bon_cadeau');
    }
}
