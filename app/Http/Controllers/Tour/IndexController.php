<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use App\Models\Match;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {

        $matches = [];
        $matchesIds = [0];
        $teams = [];
        $count = Match::query()->count();
        for ($i = 0; $i < $count; $i++) {
            $match = $this->getMatch($matchesIds);
            if (!isset($teams[$match->team1])) {
                $teams[$match->team1] = 0;
            }
            $teams[$match->team1]++;
            if (!isset($teams[$match->team2])) {
                $teams[$match->team2] = 0;
            }
            $teams[$match->team2]++;

            $matches[] = [
                'match' => $match,
                'round' => max($teams[$match->team1],  $teams[$match->team2])
            ];
            $matchesIds[] = $match->id;
        }
        return view('welcome', [
            'matches' => $matches
        ]);
    }

    private function getMatch($matches, $team = null) {
        $match = Match::query()->whereNotIn('id', $matches)->orderBy('match_date');
        if ($team !== null) {
            $match->where(function ($query) use ($team) {
                /**
                 * @var $query \Illuminate\Database\Eloquent\Builder
                 */
                $query->where('team1', '=', $team)
                    ->orWhere('team2', '=', $team);
            });
        }
        return $match->first();
    }
}