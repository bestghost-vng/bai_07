<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\BaiViet;
class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            
            $lt = new BaiViet();
            $lt->fill([
                'nguoi_dang'=>'nguoi dang thu '.$i,
            //    'ngay_dang'=>'ngay dang thu '.$i,
               'binh_luan'=>'binh luan thu '.$i,
               'like'=>$i,
               'view'=>$i
               ]
               
            );
        $lt->save();
        }
    }
}
