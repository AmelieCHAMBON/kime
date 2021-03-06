<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img')->default(NULL);
            $table->longText('txt_choice');
            $table->text('txt_win');
            $table->text('color')->nullable();
            $table->string('points')->default(1);
            $table->integer('sub_category_id')->default(1)->unsigned();
            // $table->foreign('sub_category_id')->references('id')->on('categories');
            $table->integer('trophy_id')->unsigned()->default(1);
            // $table->foreign('trophy_id')->references('id')->on('trophies');
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
        Schema::dropIfExists('activities');
    }
}
