<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TURNCATE
        // Employee::truncate();

        // NEW DATA
        for ($i = 0; $i < 1; $i++) {
            Employee::create([
                'department_id' => 1,
                'name'          => 'Ali'
            ]);
        }
    }
}
