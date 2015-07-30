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
            $table->integer('member_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->date('date_start');
            $table->date('date_end');
            $table->decimal('total', 10, 2);
            $table->text('note');
            $table->tinyInteger('payment_type');
            $table->tinyInteger('status');
            $table->tinyInteger('created_by');
            $table->tinyInteger('updated_by');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('member_id')->references('id')->on('member');
            $table->foreign('product_id')->references('id')->on('product');
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
