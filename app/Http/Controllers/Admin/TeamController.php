<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add(Request $request) {

        if ($request->isMethod('post')) {
            $name = $request->get('name');
            $country = $request->get('country');
            Team::query()->updateOrCreate(['name' => $name], ['country_id' => $country]);
            return redirect('/admin/match/new');
        }
        return view('admin.newTeam', [
            'countries' => Country::query()->get()
        ]);
    }
}