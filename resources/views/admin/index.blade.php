@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Admin Tournament</h2>
        </div>
        <div class="row py-5">
            <div class="card w-50 mx-auto">
                <div class="card-header">
                    Matches <a href="{{ route('admin.newMatch') }}"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach($matches as $match)
                            <li>{{ $match->match_date }}: {{ $match->getTeam1Name() }} vs {{ $match->getTeam2Name() }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
