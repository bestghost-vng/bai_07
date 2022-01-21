<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhSachMonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_sach_mons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_diadiem')->references('id')->on('dia_diems');
            $table->foreignId('id_mon')->references('id')->on('dac_sans');
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
        Schema::dropIfExists('danh_sach_mons');
    }
}
