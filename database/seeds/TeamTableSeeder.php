<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert(['name' => 'Russian team', 'country_id' => 177]);
        DB::table('team')->insert(['name' => 'Afganistan team', 'country_id' => 1]);
        DB::table('team')->insert(['name' => 'Albania team', 'country_id' => 2]);
        DB::table('team')->insert(['name' => 'Algeria team', 'country_id' => 3]);
        DB::table('team')->insert(['name' => 'American samoa team', 'country_id' => 4]);
        DB::table('team')->insert(['name' => 'Andorra team', 'country_id' => 5]);
        DB::table('team')->insert(['name' => 'Angola team', 'country_id' => 6]);
        DB::table('team')->insert(['name' => 'Anguila team', 'country_id' => 7]);
        DB::table('team')->insert(['name' => 'Antarctica team', 'country_id' => 8]);
        DB::table('team')->insert(['name' => 'Barbuda team', 'country_id' => 9]);
        DB::table('team')->insert(['name' => 'Argentina team', 'country_id' => 10]);
        DB::table('team')->insert(['name' => 'Armenia team', 'country_id' => 11]);
        DB::table('team')->insert(['name' => 'Aruba team', 'country_id' => 12]);
        DB::table('team')->insert(['name' => 'Australia team', 'country_id' => 13]);
        DB::table('team')->insert(['name' => 'Austria team', 'country_id' => 14]);
        DB::table('team')->insert(['name' => 'Azerbaidjan team', 'country_id' => 15]);
    }
}
