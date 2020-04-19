<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
         $this->call(UsersTableSeeder::class);
          $this->call(ImgbanniereTableSeeder::class);
          $this->call(AboutTableSeeder::class);
          $this->call(ServiceTableSeeder::class);
          $this->call(ContactSeeder::class);
          $this->call(WorkTableSeeder::class);
          $this->call(DiaporamaSeeder::class);
    }
}
