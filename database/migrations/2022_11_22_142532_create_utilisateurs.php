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
        Schema::disableForeignKeyConstraints ();
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string ('nom');
            $table->string ('prenom');
            $table->date  ('dateNaiss');
            $table->string ('classe');
            $table->string ('statut');
            $table->string  ('numTel');
            $table->string  ('adresseMail');

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
        Schema::disableForeignKeyConstraints ();
        Schema::dropIfExists('utilisateurs');
    }
};
