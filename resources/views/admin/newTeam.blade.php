@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Admin | team</h2>
        </div>
        <form class="form form-horizontal" method="post">
            {{ csrf_field() }}
            <label> Name
                <input type="text" name="name" class="form-control">
            </label>
            <label> Country
                <select name="country" class="form-control">
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </label>
            <button type="submit">Add</button>
        </form>
    </div>
@endsection
