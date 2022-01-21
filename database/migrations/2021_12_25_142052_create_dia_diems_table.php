<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaDiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_diems', function (Blueprint $table) {
            $table->id();
            $table->string('tendiadiem');
            $table->foreignId('id_vungmien');
            $table->double('kinhdo');
            $table->double('vido');
            $table->string('mieuta');   
            $table->foreignId('id_dacsan');
            $table->foreignId('id_dichvu');
            $table->foreignId('id_khachsan');
            $table->integer('trangthai');
            $table->softDeletes();
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
        Schema::dropIfExists('dia_diems');
    }
}
