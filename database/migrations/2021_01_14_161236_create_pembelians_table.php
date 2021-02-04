<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('supplier_id')->index()->nullable();
            $table->unsignedInteger('figure_id')->index()->nullable();
            $table->integer('jumlah');
            $table->bigInteger('total');
            $table->bigInteger('bayar');
            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers');
            $table->foreign('figure_id')
                ->references('id')
                ->on('figures');
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
        Schema::dropIfExists('pembelians');
    }
}
