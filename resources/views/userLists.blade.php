@extends('layouts.main')
    @push('title')
    <title>UserList</title>
    @endpush()
    @section('main-section')
    <div class="container">
<div class="table-responsive mt-5">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userLists as $userList)
                <tr><td>{{$userList->name}}</td><td>{{$userList->email}}</td><td>{{$userList->created_at}}</td></tr>
            @endforeach
        </tbody>
    </table>
</div></div>
@endsection()
