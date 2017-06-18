<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorMemePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_meme', function (Blueprint $table) {
            $table->integer('autor_id')->unsigned()->index();
            $table->foreign('autor_id')->references('id')->on('autors')->onDelete('cascade');
            $table->integer('meme_id')->unsigned()->index();
            $table->foreign('meme_id')->references('id')->on('memes')->onDelete('cascade');
            $table->primary(['autor_id', 'meme_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('autor_meme');
    }
}
