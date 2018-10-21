<?php

use Illuminate\Database\Seeder;

class PocketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 36; $i++) {
            DB::table('pockets')->insert([
                'number' => $i,
                'color' => $i % 2 == 0 ? 'black' : 'red',
                'row' => floor(($i - 1)/ 3),
                'column' => ($i - 1) % 3
            ]);
        }

        DB::table('pockets')->insert([
            'number' => 99,
            'color' => 'green',
            'row' => 12,
            'column' => 0
        ]);

        DB::table('pockets')->insert([
            'number' => 100,
            'color' => 'green',
            'row' => 12,
            'column' => 1
        ]);
    }
}
