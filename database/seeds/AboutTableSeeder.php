<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([

        'titre' => 'About Us',
            'texte' => 'Lorem ipsum dolor sit amet, ei essent delenit sit, adipisci salutatus has eu. Quis tamquam cu nam. Sed esse deleniti et, ex rebum quaestio his. Audiam deseruisse sed cu, vix ex possim causae omittantur.',

        ]);
    }
}
