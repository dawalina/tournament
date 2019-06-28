<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Match;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {

        return view('admin.index', [
            'matches' => Match::query()->orderBy('match_date')->get()
        ]);
    }
}