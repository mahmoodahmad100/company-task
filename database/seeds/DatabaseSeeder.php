<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompaniesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ManagersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
    }
}
