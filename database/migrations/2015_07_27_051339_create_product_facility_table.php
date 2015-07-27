<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFacilityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_facility', function (Blueprint $table) {
            $table->tinyInteger('product_id');
            $table->string('group', 64);
            $table->string('key', 64);
            $table->string('value', 64);
            $table->text('description');
            $table->tinyInteger('status');
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
        Schema::drop('product_facility');
    }

}
