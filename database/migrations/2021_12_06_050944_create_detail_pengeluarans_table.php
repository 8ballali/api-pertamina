<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengeluaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengeluaran_id');
            $table->unsignedBigInteger('type_id');
            $table->string('value');
            $table->timestamps();
            $table->foreign('pengeluaran_id')
            ->references('id')->on('pengeluarans')
            ->onDelete('cascade');
            $table->foreign('type_id')
            ->references('id')->on('types')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pengeluarans');
    }
}
