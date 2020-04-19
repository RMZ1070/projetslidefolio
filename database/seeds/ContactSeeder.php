<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            'adresse' => 'rue de la loutre',
             'email' =>'miaouw@miaouw',
            'telephone' => '+35245525224',
        ]);
    }
}
