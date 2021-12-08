<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengisiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengisians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengisian_id');
            $table->unsignedBigInteger('type_id');
            $table->string('value');
            $table->timestamps();
            $table->foreign('pengisian_id')
            ->references('id')->on('pengisians')
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
        Schema::dropIfExists('detail_pengisians');
    }
}
