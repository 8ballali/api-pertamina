<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_tanks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tank_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('value');
            $table->enum('status', ['ON', 'OFF']);
            $table->string('nomor_tank');
            $table->timestamps();
            $table->foreign('tank_id')
            ->references('id')->on('tanks')
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
        Schema::dropIfExists('isi_tanks');
    }
}
