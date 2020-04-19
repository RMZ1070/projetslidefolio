<?php

use Illuminate\Database\Seeder;

class DiaporamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diaporamas')->insert([

            'image' => 'nature1.jpg',

        ]);DB::table('diaporamas')->insert([

            'image' => 'bw1.jpg',

        ]);DB::table('diaporamas')->insert([

            'image' => 'portrait1.jpg',

        ]);DB::table('diaporamas')->insert([

            'image' => 'portrait5.jpg',

        ]);DB::table('diaporamas')->insert([

            'image' => 'portrait2.jpg',

        ]);DB::table('diaporamas')->insert([

            'image' => 'portrait3.jpg',

        ]);DB::table('diaporamas')->insert([

            'image' => 'portrait4.jpg',

        ]);DB::table('diaporamas')->insert([

            'image' => 'forest.jpg',

        ]);
    }
}
