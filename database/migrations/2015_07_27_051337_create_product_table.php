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
            $table->integer('city_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('name', 64);
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('longitude', 64);
            $table->string('latitude', 64);
            $table->string('phone', 15);
            $table->tinyInteger('status');
            $table->tinyInteger('created_by');
            $table->tinyInteger('updated_by');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('type_id')->references('id')->on('type');
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
