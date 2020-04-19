<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([

            'image' => 'portrait1-sm.jpg',
            'categorie' => 'portraits'

        ]);


        DB::table('works')->insert([

            'image' => 'portrait2.jpg',
            'categorie' => 'portraits'

        ]);

        DB::table('works')->insert([

            'image' => 'nature1.jpg',
            'categorie' => 'nature'
        ]);


        DB::table('works')->insert([

            'image' => 'portrait3.jpg',
            'categorie' => 'portraits'
        ]);
        DB::table('works')->insert([

            'image' => 'portrait5.jpg',
            'categorie' => 'portraits'
        ]);


        DB::table('works')->insert([

            'image' => 'nature.jpg',
            'categorie' => 'nature'
        ]);
        DB::table('works')->insert([

            'image' => 'portrait4.jpg',
            'categorie' => 'portraits'
        ]);


        DB::table('works')->insert([

            'image' => 'forest.jpg',
            'categorie' => 'bw'
        ]);
        DB::table('works')->insert([

            'image' => 'bw1.jpg',
            'categorie' => 'bw'

        ]);
        DB::table('works')->insert([

            'image' => 'portrait4.jpg',
            'categorie' => 'portraits'
        ]);


        DB::table('works')->insert([

            'image' => 'forest.jpg',
            'categorie' => 'bw'
        ]);
        DB::table('works')->insert([

            'image' => 'bw1.jpg',
            'categorie' => 'bw'

        ]);
    }
}
