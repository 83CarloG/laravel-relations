<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {

            $table->foreignId('author_id')->constrained();
            $table->string('nationality', 40)->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->default('https://medicine.vumc.org/sites/default/files/styles/barista_directory_thumbnail/public/person/profile-placeholder.png?itok=l004X7c2');
            $table->boolean('alive')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors_info');
    }
}
