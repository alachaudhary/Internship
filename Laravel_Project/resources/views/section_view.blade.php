
@extends('backend.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sections</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('courses.index')}}">Courses</a></li>
              <li class="breadcrumb-item active">Sections</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row --> 

   <table class="table table-bordered">
    <thead class="thead-dark" >
      <tr>
        <th>Section ID</th>
        <th>Course ID</th>
        <th>Teacher ID</th>
        <th>Section Capacity</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sections as $st)
            <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->course_id}}</td>
            <td>{{$st->teacher_id}}</td>
            <td>{{$st->section_capacity}}</td>
            <td><form action="{{ route('sections.destroy', $st->id) }}" method="POST" style="display: inline;">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this section?');"><i class="fa fa-trash"></i></button>
          </form>
          <form method="POST" action="{{ route('sections.edit', $st->id) }}" style="display: inline;">
            @csrf
            @method('GET')
            <button type="submit" class="btn btn-warning">Update</button>
          </form>
          <a class="btn btn-primary" href="{{ route('sections.addStudentForm', $st->id) }}">Add Student</a>
          </td>
            </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>

@endsection