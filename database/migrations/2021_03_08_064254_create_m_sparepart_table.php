<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSparepartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_sparepart', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name',225);
            $table->unsignedBigInteger('m_categories_id')->nullable();;
            $table->foreign('m_categories_id')->references('id')->on('m_categories')->onDelete("set null");
            $table->integer('price');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_sparepart');
    }
}