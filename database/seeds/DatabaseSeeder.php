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
      $this->call(InitializeTablesSeeder::class);
      $this->call(CompanyTableSeeder::class);
      $this->call(EmployeeTableSeeder::class);
      $this->call(UserManagerTableSeeder::class);
    }
}
