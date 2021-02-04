<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('figure');
            $table->bigInteger('harga');
            $table->bigInteger('hargabeli');
            $table->integer('stock');
            $table->unsignedInteger('merk_id')->index()->nullable();
            $table->foreign('merk_id')
                ->references('id')
                ->on('merks');
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
        Schema::dropIfExists('figures');
    }
}
