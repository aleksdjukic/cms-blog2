@extends('layouts.admin')

@section('content')
<div class="col-sm-11">
    @if(\Illuminate\Support\Facades\Session::has('delete_user'))
        <p class="bg-danger">{{session('delete_user')}}</p>
        @endif
        <h1>All Users</h1>
<div class="table-responsive">
        <table class="table">
            <thead>

            <tr>
                <th scope="col">ID</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr class="userpicssize">
                <th scope="row">{{$user->id}}</th>
                <td><a href="{{route('user.profile', $user->id)}}"><img src="{{$user->photo ? url('img/'.$user->photo->path) : 'http://placehold.it/200x200'}}" class="img-fluid"></a> </td>
                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role_id == 1 ? 'Administrator' : 'User'}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    <div class="d-flex justify-content-center">
        {!! $users->links() !!}
    </div>
</div>
</div>

@stop

