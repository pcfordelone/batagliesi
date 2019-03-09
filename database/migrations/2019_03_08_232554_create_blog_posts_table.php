<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('caption')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('status')->default(0);
            $table->string('author', 150)->default('Mega Model Vitória');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->text('html_content')->nullable();
            $table->string('default_img')->nullable();
            $table->timestamps();

            $table->integer('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_posts');
    }
}
