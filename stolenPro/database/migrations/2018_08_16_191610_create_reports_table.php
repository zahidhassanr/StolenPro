<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('item_type');
            $table->string('item_identify');
            $table->string('identify_type');
            $table->string('item_description');
            $table->string('lost_location');
            $table->string('item_image1');
            $table->string('item_image2');
            $table->integer('phone');
            $table->string('email');
            $table->string('status');
            $table->date('lost_date');
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
        Schema::dropIfExists('reports');
    }
}
