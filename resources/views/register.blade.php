@extends('layouts.main')
@push('title')
<title>Signup</title>
@endpush()
@section('main-section')
<form action="{{ url('/')}}/register" class="m-4" method="post">
    @csrf
    <pre>
    @php
print_r($errors->all())
    
    @endphp
</pre>
    <div class="container border-cyan-400 border p-4">
        <x-input name="name" type="text" placeholder="enter name" errorMsg="" label="Name"/>
        <x-input name="email" type="email" placeholder="enter email" errorMsg="" label="Email"/>
        <x-input name="password" type="password" placeholder="Password" errorMsg="" label="Password"/>
        <x-input name="confirmpassword" type="password" placeholder="enter confirm password" errorMsg="" label="Confirm Password"/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection()
