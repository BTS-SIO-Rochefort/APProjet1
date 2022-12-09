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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string ('titre');
            $table->string ('texte');
            $table->integer ('numero');
            $table-> date ('date');
            $table->boolean ('modif');
            $table->unsignedBigInteger ('utilisateur_id');
            $table->unsignedBigInteger ('sujet_id');
            $table->foreign('utilisateur_id')->references('id')
                ->on('utilisateurs') ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sujet_id')->references('id')
                ->on('sujets') ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('messages');
    }
};
