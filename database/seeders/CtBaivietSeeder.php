<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CtBaiviet;
class CtBaivietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
           $bv = new CtBaiviet();
           $bv->fill([ 'noi_dung' => 'noi dung '.$i,
                'hinh'=> $i.'.jpg',
                'Id_bai' => $i,
                

            ]);
               
            $bv->save();
           
        }
    }
}
