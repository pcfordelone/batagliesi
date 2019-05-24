<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectCategoryProjectTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_category_project_tag', function (Blueprint $table) {
            $table->integer('project_category_id')->unsigned();
            $table->foreign('project_category_id')->references('id')->on('project_categories')->onDelete('cascade');
            $table->integer('project_tag_id')->unsigned();
            $table->foreign('project_tag_id')->references('id')->on('project_tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_category_project_tag');
    }
}
