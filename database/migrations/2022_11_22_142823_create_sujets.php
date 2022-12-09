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
        Schema::create('sujets', function (Blueprint $table) {
            $table->id();
            $table->string ('nomTopic');
            $table->string ('tag');
            $table->string ('groupe');
            $table->unsignedBigInteger ('utilisateur_id');
            $table->unsignedBigInteger ('forum_id');
            $table->foreign('utilisateur_id')->references('id')
                ->on('utilisateurs') ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('forum_id')->references('id')
                ->on('forums') ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sujets');
    }
};
