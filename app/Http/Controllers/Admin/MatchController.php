<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Match;
use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class MatchController extends Controller
{
    public function add(Request $request) {

        if ($request->isMethod('post')) {
            $team1 = $request->get('team1');
            $team2 = $request->get('team2');
            $date = $request->get('date');
            $team1_score = $request->get('team1_score');
            $team2_score = $request->get('team2_score');
            Match::query()->updateOrCreate(
                ['team1' => $team1, 'team2' => $team2, 'date' => $date],
                ['team1_score' => $team1_score, 'team2_score' => $team2_score]
            );
            return redirect('admin');
        }
        return view('admin.newMatch', [
            'teams' => Team::query()->get()
        ]);
    }
}