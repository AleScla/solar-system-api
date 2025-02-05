<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('types')->truncate();
        $planets = config('planets');
        $planetsType = [];

        foreach($planets as $planet){
            if(!in_array($planet['type'], $planetsType)){
                $planetsType[] = $planet['type'];
            }
        }
        foreach($planetsType as $type){
            DB::table('types')->insert([
                'planet_type'=>$type,
            ]);
        }
    }
}
