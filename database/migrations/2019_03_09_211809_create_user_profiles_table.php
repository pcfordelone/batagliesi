<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('u_position')->nullable();
            $table->string('u_default_img')->nullable();
            $table->string('u_cellphone', 16)->nullable();
            $table->string('u_phone', 16)->nullable();
            $table->date('u_birthday')->nullable();

            $table->string('u_address')->nullable();
            $table->string('u_number', 10)->nullable();
            $table->string('u_complement', 100)->nullable();
            $table->string('u_cep', 9)->nullable();
            $table->string('u_district')->nullable();
            $table->string('u_city')->nullable();
            $table->string('u_uf', 2)->nullable();
            $table->string('u_country')->nullable();

            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profiles');
    }
}
