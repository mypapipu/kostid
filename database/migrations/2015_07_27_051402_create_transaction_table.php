<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->tinyInteger('member_id');
            $table->tinyInteger('product_id');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('total');
            $table->text('note');
            $table->tinyInteger('payment_type');
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
        Schema::drop('transaction');
    }

}
