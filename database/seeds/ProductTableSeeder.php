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
            'name' => 'Espreso',
            'slug' => 'slug_espreso',
            'price' => '120',
            'order' => '1'
        ]);

        DB::table('products')->insert([
            'name' => 'Macchiato',
            'slug' => 'slug_macchiato',
            'price' => '130',
            'order' => '2'
        ]);

        DB::table('products')->insert([
            'name' => 'Cappuccino',
            'slug' => 'slug_cappuccino',
            'price' => '140',
            'order' => '3'
        ]);

        DB::table('products')->insert([
            'name' => 'Caffe Latte',
            'slug' => 'slug_latte',
            'price' => '170',
            'order' => '4'
        ]);

        DB::table('products')->insert([
            'name' => 'Caffe Mocha',
            'slug' => 'slug_mocha',
            'price' => '200',
            'order' => '5'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Espreso',
            'slug' => 'slug_double_espreso',
            'price' => '200',
            'order' => '6'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Macchiato',
            'slug' => 'slug_double_macchiato',
            'price' => '210',
            'order' => '7'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Cappuccino',
            'slug' => 'slug_double_cappucino',
            'price' => '220',
            'order' => '8'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Latte',
            'slug' => 'slug_double_latte',
            'price' => '250',
            'order' => '9'
        ]);

        DB::table('products')->insert([
            'name' => 'Ness',
            'slug' => 'slug_ness',
            'price' => '150',
            'order' => '10'
        ]);

        DB::table('products')->insert([
            'name' => 'Limunada',
            'slug' => 'slug_limunade',
            'price' => '150',
            'order' => '11'
        ]);

        DB::table('products')->insert([
            'name' => 'Cedjeno',
            'slug' => 'slug_juice',
            'price' => '250',
            'order' => '12'
        ]);

        DB::table('products')->insert([
            'name' => 'Soja',
            'slug' => 'slug_soja',
            'price' => '40',
            'order' => '13'
        ]);

        DB::table('products')->insert([
            'name' => 'Voda',
            'slug' => 'slug_water',
            'price' => '80',
            'order' => '14'
        ]);

        DB::table('products')->insert([
            'name' => 'Mineralna voda',
            'slug' => 'slug_mineral_water',
            'price' => '90',
            'order' => '15'
        ]);
    }
}
