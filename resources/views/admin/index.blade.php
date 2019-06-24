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
                </div>
            </div>
            <div class="card w-30 mx-auto">
                <div class="card-header">Countries <a href="{{ route('admin.newRound') }}"><i class="fa fa-plus-circle"></i></a></div>
                <div class="card-body">
                </div>
            </div>
            <div class="card w-30 mx-auto">
                <div class="card-header">Teams <a href="{{ route('admin.newRound') }}"><i class="fa fa-plus-circle"></i></a></div>
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="card w-50 mx-auto">
                <div class="card-header">Matches <a href="{{ route('admin.newRound') }}"><i class="fa fa-plus-circle"></i></a></div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
@endsection
