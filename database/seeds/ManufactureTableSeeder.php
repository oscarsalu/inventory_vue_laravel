<?php

use Illuminate\Database\Seeder;

class ManufactureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('manufactures')->truncate();
        $manufactures = [
            [
                'name' => 'HP'
            ],
            [
                'name' => 'DELL'
            ],
            [
                'name' => 'ACER'
            ],
            [
                'name' => 'AVAYA'
            ],
            [
                'name' => 'SONY'
            ],
        ];
        DB::table('manufactures')->insert($manufactures);
    }
}
