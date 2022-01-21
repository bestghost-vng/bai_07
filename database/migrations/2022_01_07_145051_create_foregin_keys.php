<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeginKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dia_diems', function (Blueprint $table) {
            $table->foreign('id_vungmien')->references('id')->on('vung_miens');
            $table->foreign('id_dacsan')->references('id')->on('dac_sans');
            $table->foreign('id_khachsan')->references('id')->on('khach_sans');
            $table->foreign('id_dichvu')->references('id')->on('dich_vus');
        });
        Schema::table('quan_ans', function (Blueprint $table) {
            $table->foreign('id_danhsach')->references('id')->on('danh_sach_mons');
        });
      
        Schema::table('bai_viets', function (Blueprint $table) {
            $table->foreign('id_dacsan')->references('id')->on('dac_sans');
            $table->foreign('id_diadiem')->references('id')->on('dia_diems');
            $table->foreign('id_dichvu')->references('id')->on('dich_vus');
            $table->foreign('id_quanan')->references('id')->on('quan_ans');
            $table->foreign('id_nguoidung')->references('id')->on('users');
        }); 
        Schema::table('hinhs',function(Blueprint $table){
            $table->foreign('id_hinh_anh')->references('id')->on('danh_sach_hinhs');
        //     $table->foreign('id_hinh_anh')->references('id')->on('danh_sach_hinh_khach_sans');
        //     $table->foreign('id_hinh_anh')->references('id')->on('danh_sach_hinh_dia_diems');
        //     $table->foreign('id_hinh_anh')->references('id')->on('danh_sach_hinh_quan_ans');
        //     $table->foreign('id_hinh_anh')->references('id')->on('danh_sach_hinh_dac_sans');
        });
        Schema::table('danh_sach_hinhs', function (Blueprint $table) {
            $table->foreign('id_bang')->references('id')->on('bai_viets');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dia_diems', function (Blueprint $table) {
            //
        });
        Schema::table('quan_ans', function (Blueprint $table) {
            //
        });
        Schema::table('hinhs', function (Blueprint $table) {
            //
        });
        Schema::table('bai_viets', function (Blueprint $table) {
            //
        });
    }
}
