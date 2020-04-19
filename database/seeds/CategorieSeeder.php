<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->insert([

            'categorie' => 'Portrait',

        ]);
        DB::table('categories')->insert([

            'categorie' => 'B&W',

        ]);


        DB::table('categories')->insert([

            'categorie' => 'Nature',

        ]);
    }
}
