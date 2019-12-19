<?php

use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TURNCATE
        // Manager::truncate();

        // NEW DATA
        for ($i = 0; $i < 1; $i++) {
            Manager::create([
                'department_id' => 1,
                'name'          => 'Mahmood'
            ]);
        }
    }
}
