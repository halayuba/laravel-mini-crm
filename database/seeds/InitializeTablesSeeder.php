<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InitializeTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         //== ROLES
        //====================
        DB::insert("insert into roles (`id`, `name`) values
        (1, 'admin'),
        (2, 'manager')
        ");

         //== ADMIN ACCOUNT
        //====================
        $admin[] = [
           'id' => 1,
           'name' => 'Admin',
           'email' => 'admin@site.com',
           'password' => bcrypt('password'),
           'role_id' => 1,
           'remember_token' => str_random(10),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
         ];
         DB::table('users')->insert($admin);

          //== MANAGER ACCOUNT
         //====================
         $manager[] = [
           'id' => 2,
           'name' => 'Manager',
           'email' => 'manager@site.com',
           'password' => bcrypt('password'),
           'role_id' => 2,
           'remember_token' => str_random(10),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
         ];
         DB::table('users')->insert($manager);

    }
}
