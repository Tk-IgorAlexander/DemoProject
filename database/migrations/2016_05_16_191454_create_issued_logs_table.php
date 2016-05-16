<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuedLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issued_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('book_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->date('issued_at');
            $table->date('return_time');

            $table->foreign('book_id')->references('id')->on('books')
                ->onUpdate('restrict')
                ->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::drop('issued_logs');
    }
}
