@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Admin Tournament</h2>
        </div>
        <div class="row py-5">
            <div class="card w-30 mx-auto">
                <div class="card-header">Rounds <a href="{{ route('admin.newRound') }}"><i class="fa fa-plus-circle"></i></a></div>
                <div class="card-body">
                    <ul>
                        @foreach($rounds as $round)
                            <li>{{ $round->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="card w-30 mx-auto">
                <div class="card-header">Countries <a href="{{ route('admin.newRound') }}"><i class="fa fa-plus-circle"></i></a></div>
                <div class="card-body">
                    <ul>
                        @foreach($countries as $country)
                            <li>{{ $country->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="card w-30 mx-auto">
                <div class="card-header">Teams <a href="{{ route('admin.newRound') }}"><i class="fa fa-plus-circle"></i></a></div>
                <div class="card-body">
                    <ul>
                        @foreach($teams as $team)
                            <li>{{ $team->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="card w-50 mx-auto">
                <div class="card-header">Matches <a href="{{ route('admin.newRound') }}"><i class="fa fa-plus-circle"></i></a></div>
                <div class="card-body">
                    <ul>
                        @foreach($matches as $match)
                            <li>{{ $match->match_date }}: {{ $match->team1 }} vs {{ $match->team2 }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
