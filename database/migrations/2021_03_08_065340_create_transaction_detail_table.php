<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transactions_id')->nullable();
            $table->foreign('transactions_id')->references('id')->on('transactions')->onDelete('set null');
            $table->unsignedBigInteger('m_sparepart_id')->nullable();
            $table->foreign('m_sparepart_id')->references('id')->on('m_sparepart')->onDelete('set null');
            $table->string('sparepart_name',225);
            $table->integer('sparepart_price');
            $table->integer('quantity');
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_detail');
    }
}