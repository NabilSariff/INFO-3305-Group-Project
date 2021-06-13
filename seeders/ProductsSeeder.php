<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Nike Air Force 1',    
                'price'=> '250.00',
                'description'=>'Epic shoe to run faster. Very light',
                'category'=>'shoe',
                'gallery'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/f094af40-f82f-4fb9-a246-e031bf6fc411/air-force-1-07-shoe-NMmm1B.png'
            ],
            [
                'name'=>'Nike Revolution Black',    
                'price'=> '250.00',
                'description'=>'Epic shoe to run faster. Very light',
                'category'=>'shoe',
                'gallery'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/f094af40-f82f-4fb9-a246-e031bf6fc411/air-force-1-07-shoe-NMmm1B.png'
            ],
            [
                'name'=>'Nike Air Zoom Winflo 7',    
                'price'=> '250.00',
                'description'=>'Epic shoe to run faster. Very light',
                'category'=>'shoe',
                'gallery'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/f094af40-f82f-4fb9-a246-e031bf6fc411/air-force-1-07-shoe-NMmm1B.png'
            ],
            [
                'name'=>'Nike Air Max 2090',    
                'price'=> '250.00',
                'description'=>'Epic shoe to run faster. Very light',
                'category'=>'shoe',
                'gallery'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/f094af40-f82f-4fb9-a246-e031bf6fc411/air-force-1-07-shoe-NMmm1B.png'
            ],
            [
                'name'=>'Nike Tanjun',    
                'price'=> '250.00',
                'description'=>'Epic shoe to run faster. Very light',
                'category'=>'shoe',
                'gallery'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/f094af40-f82f-4fb9-a246-e031bf6fc411/air-force-1-07-shoe-NMmm1B.png'
            ],
            [
                'name'=>'Nike Revolution FlyEase',    
                'price'=> '250.00',
                'description'=>'Epic shoe to run faster. Very light',
                'category'=>'shoe',
                'gallery'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/f094af40-f82f-4fb9-a246-e031bf6fc411/air-force-1-07-shoe-NMmm1B.png'
            ],

            ]);
    }
}
