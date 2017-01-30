<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('version')->default(1);
            $table->timestamps();
        });

        Schema::create('checklist_form', function(Blueprint $table) {
            $table->integer('checklist_category_id')->unsigned();
            $table->foreign('checklist_category_id')
                    ->references('id')
                    ->on('checklist_categories')
                    ->onDelete('cascade');
            $table->integer('forms_template_id')->unsigned();
            $table->foreign('forms_template_id')
                    ->references('id')
                    ->on('forms_templates')
                    ->onDelete('cascade');
            $table->primary(['checklist_category_id', 'forms_template_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklist_form');
        Schema::dropIfExists('checklist_categories');
    }
}
