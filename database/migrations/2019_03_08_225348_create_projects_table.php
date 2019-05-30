<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status')->default(0);
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('default_img')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->string('client')->nullable();
            $table->string('project_date')->nullable();
            $table->timestamps();

            $table->integer('project_category_id')->unsigned();
            $table->foreign('project_category_id')->references('id')->on('project_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
