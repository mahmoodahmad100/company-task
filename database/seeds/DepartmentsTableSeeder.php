<?php

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TURNCATE
        // Department::truncate();

        // NEW DATA
        for ($i = 0; $i < 1; $i++) {
            Department::create([
                'company_id' => 1,
                'name'       => 'IT Department',
            ]);
        }
    }
}
