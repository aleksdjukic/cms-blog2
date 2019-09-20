@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <h1>User Profile</h1>
            <img src="{{$user->photo ? url('img/'.$user->photo->path) : 'http://placehold.it/200x200'}}" class="img-fluid">
        </div>
        <div class="col-sm-9 profiletext">

            <ul>
                <li>{{$user->email}}</li>
                <li>{{$user->role_id == 1 ? "Administrator" : "User"}}</li>
                <li>{{$user->is_active ? "Active" : "Not Active" }}</li>
            </ul>

        </div>
    </div>
</div>

    @endsection