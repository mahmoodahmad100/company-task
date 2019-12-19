<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TURNCATE
        // Company::truncate();

        // list of companies
        $companies = ['test ltd'];

        // NEW DATA
        for ($i = 0; $i < sizeof($companies); $i++) {
            Company::create([
                'name' => $companies[$i]
            ]);
        }
    }
}
