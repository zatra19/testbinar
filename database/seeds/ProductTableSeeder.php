<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Giant Reign',
            'price' => 2560,
            'imageurl' => 'http://www.sepedacycleshop.com/image-product/img2033-1368243649.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Santa Cruz Nomad',
            'price' => 7510,
            'imageurl' => 'https://www.santacruzbicycles.com/files/frame-thumbs/my18_nomad_xx1_rsv30_tan.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Yeti SB5',
            'price' => 8715,
            'imageurl' => 'https://ep1.pinkbike.org/p5pb11178439/p5pb11178439.jpg',
        ]);

    }
}
