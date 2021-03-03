<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSupplyInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_invoices', function (Blueprint $table) {
            $table->increments('supply_number');
            $table->integer('supplier_id');
            $table->integer('spare_part_id');
            $table->integer('admin_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('total_price');
            $table->date('supply_date');
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
        Schema::dropIfExists('supply_invoices');
    }
}
