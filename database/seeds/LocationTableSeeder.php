<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->truncate();
        $location = [
            [
                'name' => 'Prefab A',
                'BU' => 'Scope',
                'OU' => 'P4'
            ],
            [
                'name' => 'Prefab B',
                'BU' => 'Scope',
                'OU' => 'P4'
            ],
            [
                'name' => 'Prefab C',
                'BU' => 'Scope',
                'OU' => 'P4'
            ],
            [
                'name' => 'Prefab D',
                'BU' => 'Scope',
                'OU' => 'P4'
            ],
            [
                'name' => 'Prefab E',
                'BU' => 'Scope',
                'OU' => 'P4'
            ],
            [
                'name' => 'Prefab F',
                'BU' => 'Scope',
                'OU' => 'P4'
            ],
            
        ];
        DB::table('locations')->insert($location);
    }
}
