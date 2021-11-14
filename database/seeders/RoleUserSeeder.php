<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   // we need to pick random role and assgin to user

        $roles=Role::all();  // give me collection of roles
        User::all()->each(function($user) use ($roles){
            $user->roles()->attach(
                $roles->random(1)->pluck('id')
            );
        });
        // i told in line 23 to pick random id from roles collection and attch that role to 
        // relationship on user model
    }
}
