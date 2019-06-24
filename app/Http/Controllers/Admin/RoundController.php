<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function add(Request $request) {

        return view('admin.newRound', []);
    }
}