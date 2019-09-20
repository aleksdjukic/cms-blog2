@extends('layouts.admin')
@section('content')

    @if($message)

        <div class="row">
            <div class="container">
            <div class="col-sm-12">
        <div class="alert alert-secondary" role="alert">
            {{ $message }}
        </div>
            </div>
            </div>
        </div>
    @endif
<div class="row">
    <div class="container">
        <div class="col-sm-12">
            @if(isset($details))
                <h2>Sample User details</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

@endsection

