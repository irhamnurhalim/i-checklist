<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });

        Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('username');
                $table->string('password');
                $table->string('remember_token')->nullable();

                $table->string('bio')->nullable();
                $table->string('profpic')->nullable();

                $table->integer('unit_id')->unsigned()->nullable();
                $table->foreign('unit_id')->references('id')->on('units');                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });

        Schema::create('role_user', function (Blueprint $table) {
                $table->integer('role_id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->foreign('role_id')
                      ->references('id')
                      ->on('roles')
                      ->onDelete('cascade');
                $table->foreign('user_id')
                      ->references('id')
                      ->on('users')
                      ->onDelete('cascade');
                $table->primary(['role_id', 'user_id']);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('users');
        Schema::dropIfExists('units');
    }
}
