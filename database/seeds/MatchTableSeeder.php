<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('match')->insert(['team1' => 2, 'team2' => 3, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
        DB::table('match')->insert(['team1' => 4, 'team2' => 5, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
        DB::table('match')->insert(['team1' => 6, 'team2' => 7, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
        DB::table('match')->insert(['team1' => 8, 'team2' => 9, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
        DB::table('match')->insert(['team1' => 10, 'team2' => 11, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
        DB::table('match')->insert(['team1' => 12, 'team2' => 13, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
        DB::table('match')->insert(['team1' => 14, 'team2' => 15, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
        DB::table('match')->insert(['team1' => 16, 'team2' => 1, 'match_date' => '2019-06-01', 'team1_score' => 1, 'team2_score' => 2]);
    }
}
