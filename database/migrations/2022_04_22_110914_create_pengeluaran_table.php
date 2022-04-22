<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('kasir')->nullable();
            $table->foreign('kasir')
            ->references('id')
            ->on('billers')
            ->onDelete('SET NULL');
            $table->string('barang');
            $table->integer('jml_pengeluaran');
            $table->string('foto_pengeluaran')->nullable();
            $table->date('tgl_pengeluaran');
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
        Schema::dropIfExists('pengeluaran');
    }
}
