<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //create roles
       $adminRole = Role::create(['name' => 'admin']);
       $createurRole = Role::create(['name' => 'etudiant']);


       //create users
       $admin = User::create([
        'name'    => 'libasse',
        'email'         => 'admin@uasz.com',
        'password'      => Hash::make('Password')
    ]);

    $etudiant = User::create([
        'name'    => 'papa lo',
        'email'         => 'etudiant@uasz.com',
        'password'      => Hash::make('Password')
    ]);

    

    //attach roles to users
    $admin->roles()->sync([$adminRole->id]);
    $etudiant->roles()->sync([$createurRole->id]);
  

       
    }
}
