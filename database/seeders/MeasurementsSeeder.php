<?php

namespace Database\Seeders;

use App\Models\Measurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasurementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $measurements = [
            [
                'name' => '1/4 teaspoon',
                'base_units_tablespoon' => 1/12
            ],
            [
                'name' => '1/2 teaspoon',
                'base_units_tablespoon' => 1/6
            ],
            [
                'name' => '1 teaspoon',
                'base_units_tablespoon' => 1/3
            ],
            [
                'name' => '1/2 Tablespoon',
                'base_units_tablespoon' => 1/2
            ],
            [
                'name' => '2 teaspoons',
                'base_units_tablespoon' => 2/3
            ],
            [
                'name' => '1 Tablespoon',
                'base_units_tablespoon' => 1
            ],
            [
                'name' => '2 Tablespoons',
                'base_units_tablespoon' => 2
            ],
            [
                'name' => '3 Tablespoons',
                'base_units_tablespoon' => 3
            ],
            [
                'name' => '1/4 Cup',
                'base_units_tablespoon' => 4
            ],
            [
                'name' => '1/3 Cup',
                'base_units_tablespoon' => 5 + 1/3
            ],
            [
                'name' => '1/2 Cup',
                'base_units_tablespoon' => 6
            ],
            [
                'name' => '2/3 Cup',
                'base_units_tablespoon' => 10 + 2/3
            ],
            [
                'name' => '3/4 Cup',
                'base_units_tablespoon' => 12
            ],
            [
                'name' => '1 Cup',
                'base_units_tablespoon' => 16
            ],
        ];

        foreach ($measurements as $measurement) {
            Measurement::create($measurement);
        };
    }
}
