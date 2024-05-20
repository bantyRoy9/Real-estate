@extends('layouts.main')
    @push('title')
    <title>UserList</title>
    @endpush()
    @section('main-section')
    <div class="container">
        <a
            name=""
            id=""
            class="btn btn-primary"
            href={{route('create-user')}}
            role="button"
            >Button</a
        >
        
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
                <tr>
                    <td>{{$userList->name}}</td><td>{{$userList->email}}</td><td>{{$userList->created_at}}</td>
                <td>
                    <a name="" id="" class="btn btn-secondery" href="{{route('userList-edit',['id'=>$userList->id])}}" role="button" >edit</a>
                    <a name="" id="" class="btn btn-danger" href="{{route('userList-delete',['id'=>$userList->id])}}" role="button" >Delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div></div>
@endsection()
