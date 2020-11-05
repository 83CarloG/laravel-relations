<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            //Cancello la tabella author
            $table->dropColumn('author');
            //Inserisco la foreign Key per la tabella author
            $table->unsignedBigInteger('author_id')->nullable();
            //Creo la relazione
            $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            // Ciò che creo distruggo, ciò che distruggo creo!
            $table->string('author', 50)->nullable();
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
        });
    }
}
