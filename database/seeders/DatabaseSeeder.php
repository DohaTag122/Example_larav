<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(class:RoleSeeder::class);
        $this->call(class:UserSeeder::class);
        $this->call(class:RoleUserSeeder::class);


        
    }
}
