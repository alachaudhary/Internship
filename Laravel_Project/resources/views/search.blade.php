@extends('backend.app')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row --> 
        <div class="row">
            <div class="col-md-6 ">
                <button class="btn btn-primary mb-3">
                    <a style="color:white;" href="{{route('students.create')}}">
                        <img src="{{ asset('icon/add.png') }}" style="width: 20px; height: 20px; margin-right: 5px;">
                        Add Record
                    </a>
                </button>
            </div><!-- /.col -->
            <div class="col-md-6 text-right">
                <form action="{{route('students.search')}}" method="get" class="form-inline justify-content-end">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" id="search_name" name="search_name" placeholder="Enter the Student Name">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 
      <table class="table table-bordered">      
      <thead class="thead-dark" >
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Program</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
           @foreach($students as $st)
            <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->name}}</td>
            <td>{{$st->father_name}}</td>
            <td>{{$st->gender}}</td>
            <td>{{$st->age}}</td>
            <td>{{$st->program}}</td>
            <td>{{$st->email}}</td>
            <td>{{$st->phone}}</td>
            <td>{{$st->address}}</td>
           <td><form action="{{ route('students.destroy', $st->id) }}" method="POST" style="display: inline;">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?');"><i class="fa fa-trash"></i></button>
          </form>
          <form method="POST" action="{{ route('students.edit', $st->id) }}" style="display: inline;">
            @csrf
            @method('GET')
            <button type="submit" class="btn btn-warning">Update</button>
          </form>
          <a href="{{ route('students.show', $st->id) }}" class="btn btn-info">View</a>

        </td>
            </tr>
            @endforeach
      
    </tbody>
  </table>
</div>
</div>
</div>
@endsection