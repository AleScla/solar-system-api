<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // To be able to truncate()
        Schema::disableForeignKeyConstraints();
        DB::table('planets')->truncate();
        $planets = config('planets');
        foreach($planets as $planet){
            DB::table('planets')->insert([
                'name'=>$planet['name'],
                'mass_kg'=>$planet['mass_kg'],
                'diameter_km'=>$planet['diameter_km'],
                'sun_distance'=>$planet['average_distance_from_sun_km'],
                'orbital_days'=>$planet['orbital_period_days'],
                'moons'=>$planet['moons'],
                'atmosphere'=>$planet['atmospheric_composition'],
                'avg_temp'=>$planet['average_temperature_celsius'],
                'description'=>$planet['description'],
                'link'=>$planet['link'],
                'video'=>asset('storage/'.$planet['video']),
            ]);
        }

    }
}
