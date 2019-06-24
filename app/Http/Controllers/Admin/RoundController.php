<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function add(Request $request) {

        if ($request->isMethod('post')) {
            $position = Round::query()->count() + 1;
            $name = $request->get('name');
            Round::query()->firstOrCreate(['name' => $name], ['position' => $position]);
            return redirect('admin');
        }
        return view('admin.newRound', []);
    }
}