<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->tinyInteger('city_id');
            $table->tinyInteger('type_id');
            $table->string('name', 64);
            $table->text('description');
            $table->string('longitude', 64);
            $table->string('latitude', 64);
            $table->string('phone', 15);
            $table->tinyInteger('status');
            $table->tinyInteger('created_by');
            $table->tinyInteger('updated_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }

}
