<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_id')->unsigned();
            $table->foreign('form_id')
                    ->references('id')
                    ->on('forms_templates')
                    ->onDelete('cascade');
            $table->string('item_1');
            $table->text('item_1_notes');
            $table->string('item_2');
            $table->text('item_2_notes');
            $table->string('item_3');
            $table->text('item_3_notes');
            $table->string('item_4');
            $table->text('item_4_notes');
            $table->string('item_5');
            $table->text('item_5_notes');
            $table->string('item_6');
            $table->text('item_6_notes');
            $table->string('item_7');
            $table->text('item_7_notes');
            $table->string('item_8');
            $table->text('item_8_notes');
            $table->string('item_9');
            $table->text('item_9_notes');
            $table->string('item_10');
            $table->text('item_10_notes');

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
        Schema::dropIfExists('forms_items');
    }
}
