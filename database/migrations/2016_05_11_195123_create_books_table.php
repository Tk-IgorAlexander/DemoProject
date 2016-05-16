<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();



            $table->string('title');
            $table->integer('author_id')->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->smallInteger('year');
            $table->text('desc');
            $table->char('isbn', 13);
            $table->string('image_path');
            $table->tinyInteger('stock');


            $table->foreign('author_id')->references('id')->on('authors')
                ->onUpdate('restrict')
                ->onDelete('cascade');

            $table->foreign('publisher_id')->references('id')->on('publishers')
                ->onUpdate('restrict')
                ->onDelete('cascade');

            $table->foreign('country_id')->references('id')->on('countries')
                ->onUpdate('restrict')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
