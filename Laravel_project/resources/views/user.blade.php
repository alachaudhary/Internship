@extends('backend.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    </br><h1>User Details</h1></br>
   <table class="table table-bordered">
    <tbody>
            <tr><td><strong>Name</strong></td><td>{{$users->name}}</td></tr>
            <tr><td><strong>Gender</strong></td><td>{{$users->gender}}</td></tr>
            <tr><td><strong>Country</strong></td><td>{{$users->country}}</td></tr>
            <tr><td><strong>Email</strong></td><td>{{$users->email}}</td></tr>

           
      
    </tbody>
  </table>
</div>
</div>
</div>

@endsection
     