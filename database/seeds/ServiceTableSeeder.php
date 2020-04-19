<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            'titre' => 'Portrait',
            'logo' => 'fa fa-camera-retro',
            'texte' => 'Ad has dicat ridens consetetur, eos eu option persius. Mollis cotidieque conclusionemque per id, ne nam alienum liberavisse.',
    
            ]);
        DB::table('services')->insert([

                'titre' => 'Black & white',
                'logo' => 'fa fa-camera',
                    'texte' => 'In mea similique vulputate, ea cum amet malorum dissentiunt. Qui deleniti aliquando cu, ullum soluta his an, id inani salutatus sit.',
        
                ]);
        DB::table('services')->insert([

                    'titre' => 'Web Design',
                    'logo' => 'fa fa-globe',
                    'texte' => 'Ad has dicat ridens consetetur, eos eu option persius. Mollis cotidieque conclusionemque per id, ne nam alienum liberavisse.',
            
                    ]);
    }
}
