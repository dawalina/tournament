@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Admin | Round</h2>
        </div>
        <form class="form form-horizontal" method="post">
            {{ csrf_field() }}
            <label> Name
                <input type="text" name="name">
            </label>
            <button type="submit">Add</button>
        </form>
    </div>
@endsection
