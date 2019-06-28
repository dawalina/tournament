@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Admin | Match</h2>
        </div>
        <a href="{{ route('admin.newTeam') }}"><i class="fa fa-plus-circle"></i> Add team</a>
        <form class="form form-horizontal" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label> Team1
                    <select name="team1" class="form-control">
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label> Team2
                    <select name="team2" class="form-control">
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label> Date
                    <input type="text" name="match_date" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label> Team1 score
                    <input type="number" name="team1_score" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label> Team2 score
                    <input type="number" name="team2_score" class="form-control">
                </label>
            </div>
            <button type="submit">Add</button>
        </form>
    </div>
@endsection
