<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spbus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('amount');
            $table->enum('type', ['Pertalite', 'Pertamax', 'Pertamax_Turbo', 'Solar', 'Bio_Solar']);
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
        Schema::dropIfExists('spbus');
    }
}
