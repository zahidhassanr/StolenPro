<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('device_type');
            $table->string('device_company');
            $table->string('device_model');
            $table->string('identity_type');
            $table->string('device_identity');
            $table->string('device_image1');
            $table->string('device_image2');
            $table->string('device_image3');
            $table->string('phoneNum');
            $table->date('used_year');
            $table->boolean('new');
            $table->string('status');
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
        Schema::dropIfExists('devices');
    }
}
