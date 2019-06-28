@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Tournament</h2>
        </div>
        <div class="tournament">
            @foreach($matches as $match)
                <div class="match-{{ $match['round'] }}">{{ $match['match']->getTeam1Name() }} vs {{ $match['match']->getTeam2Name() }}</div>
            @endforeach
        </div>
    </div>
@endsection
