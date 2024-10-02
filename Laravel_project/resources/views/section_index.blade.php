@extends('backend.app')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <table class="table table-bordered">
      <thead class="thead-dark" >
      <tr>
        <th>Section ID</th>
        <th>Teacher ID</th>
        <th>Section Capacity</th>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Duration</th>
      </tr>
    </thead>
    <tbody>
           @foreach($sections as $st)
            <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->teacher_id}}</td>
            <td>{{$st->section_capacity}}</td>
            <td>{{$st->course_id}}</td>
            <td>{{$st->course->course_name}}</td>
            <td>{{$st->course->course_duration}}</td>            
        </td>
            </tr>
            @endforeach
      
    </tbody>
  </table>
</div>
</div>
</div>
@endsection