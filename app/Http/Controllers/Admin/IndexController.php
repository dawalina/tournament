<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Match;
use App\Models\Round;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {

        return view('admin.index', [
            'rounds' => Round::query()->orderBy('position')->get(),
            'countries' => Country::query()->orderBy('name')->get(),
            'teams' => Team::query()->orderBy('name')->get(),
            'matches' => Match::query()->orderBy('match_date')->get()
        ]);
    }
}