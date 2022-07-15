<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWarehouseIdToPengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengeluaran', function (Blueprint $table) {
            $table->unsignedInteger('warehouse')->nullable();
            $table->foreign('warehouse')
            ->references('id')
            ->on('warehouses')
            ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengeluaran', function (Blueprint $table) {
            $table->unsignedInteger('warehouse')->nullable();
            $table->foreign('warehouse')
            ->references('id')
            ->on('warehouses')
            ->onDelete('SET NULL');
        });
    }
}
