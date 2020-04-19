<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgbanniereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('imgbannieres')->insert([

            'titre' => 'Company Name',
            'imgba' => 'logo.jpg',

        ]);
    }
}
