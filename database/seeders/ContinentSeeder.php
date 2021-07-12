<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continents = [
          'Asia',
          'Africa',
          'Europe',
          'North America',
          'South America',
          'Oceania',
          'Antarctica'
        ];

        foreach ($continents as $continent)
        {
            Continent::create([
                'name' => $continent
            ]);
        }
    }
}
