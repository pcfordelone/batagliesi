<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('alt')->nullable();
            $table->string('url');
            $table->timestamps();

            $table->integer('award_id')->unsigned();
            $table->foreign('award_id')->references('id')->on('awards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('award_images');
    }
}
