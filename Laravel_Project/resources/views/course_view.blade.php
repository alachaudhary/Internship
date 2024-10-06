@extends('backend.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Courses</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->  
      <button style="margin: 10px" class="btn btn-primary"><a style="color:white; " href="{{route('courses.create')}}" ><img src="{{ asset('icon/add.png') }}" style="width: 20px; height: 20px; margin-right: 5px;">Add Course</a></button>

   <table class="table table-bordered">
    <thead class="thead-dark" >
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Duration</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
           @foreach($courses as $course)
            <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->course_name}}</td>
            <td>{{$course->course_duration}}</td>
            <td><a href="{{ route('courses.show', $course->id) }}" class="btn btn-info">View Sections</a>
             <a href="{{ route('sections.create', $course->id) }}" class="btn btn-primary">Add Section</a>
             <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline;">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure this will delete related sections too?');"><i class="fa fa-trash"></i></button>
             </form>
             <form method="POST" action="{{ route('courses.edit', $course->id) }}" style="display: inline;">
            @csrf
            @method('GET')
            <button type="submit" class="btn btn-warning">Update</button>
          </form>
            </td>
            </tr>
            @endforeach
      
    </tbody>
  </table>
</div>
</div>
</div>

@endsection