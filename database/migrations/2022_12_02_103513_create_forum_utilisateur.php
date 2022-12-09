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
        Schema::create('forum_utilisateur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('forum_id');
            $table->unsignedBigInteger ('utilisateur_id');
            $table->timestamps();
            $table->foreign ('forum_id')->references ('id')->on ('forums')
                ->onDelete ('cascade');
            $table->foreign ('utilisateur_id')->references ('id')->on ('utilisateurs')
                ->onDelete ('cascade');
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
        Schema::dropIfExists('forums_utilisateurs');
    }
};
