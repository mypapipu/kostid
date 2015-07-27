<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->tinyInteger('facebook_id');
            $table->string('name', 128);
            $table->text('address');
            $table->string('ktp_id', 32);
            $table->text('image');
            $table->string('phone', 15);
            $table->string('email');
            $table->string('college');
            $table->string('company');
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
        Schema::drop('member');
    }

}
