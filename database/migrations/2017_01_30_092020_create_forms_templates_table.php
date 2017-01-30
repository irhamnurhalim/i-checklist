<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('version')->default(1);
            $table->integer('unit_id')->unsigned();
            $table->foreign('unit_id')
                    ->references('id')
                    ->on('units')
                    ->onDelete('cascade');
            $table->integer('prerequisite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms_templates');
    }
}
