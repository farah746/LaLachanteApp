<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('Contact', function (Blueprint $table) {
            $table->id();
            
            $table->string('id_contact');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');

            $table->string('email');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('ville');

            $table->string('url_contact_folder');
            $table->string('id_client_stripe');
            $table->string('url_client_stripe');
            $table->string('id_CSE');
            
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
        Schema::dropIfExists('Contact');
    }
}
