<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhDacSansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_dac_sans', function (Blueprint $table) {
            $table->id();
            $table->string('nguon');
            $table->foreignId('id_hinh_anh')->references('id')->on('danh_sach_hinh_dac_sans');
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
        Schema::dropIfExists('hinh_dac_sans');
    }
}
