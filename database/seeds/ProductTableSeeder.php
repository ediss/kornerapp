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
            'price' => '150',
            'order' => '4'
        ]);

        DB::table('products')->insert([
            'name' => 'Caffe Mocha',
            'slug' => 'slug_mocha',
            'price' => '160',
            'order' => '5'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Espreso',
            'slug' => 'slug_double_espreso',
            'price' => '240',
            'order' => '6'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Macchiato',
            'slug' => 'slug_double_macchiato',
            'price' => '260',
            'order' => '7'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Cappuccino',
            'slug' => 'slug_double_cappucino',
            'price' => '280',
            'order' => '8'
        ]);

        DB::table('products')->insert([
            'name' => 'Dupli Latte',
            'slug' => 'slug_double_latte',
            'price' => '300',
            'order' => '9'
        ]);

        DB::table('products')->insert([
            'name' => 'Ness',
            'slug' => 'slug_ness',
            'price' => '170',
            'order' => '10'
        ]);

        DB::table('products')->insert([
            'name' => 'Limunada',
            'slug' => 'slug_limunade',
            'price' => '160',
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
            'price' => '60',
            'order' => '13'
        ]);

        DB::table('products')->insert([
            'name' => 'Voda',
            'slug' => 'slug_water',
            'price' => '160',
            'order' => '14'
        ]);
    }
}
