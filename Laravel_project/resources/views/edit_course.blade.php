<!-- create.blade.php -->

@extends('backend.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    <h2>Edit Course</h2>


    <!-- Form to create a new course -->
    <form action="{{ route('courses.update',$id->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Course Name -->
        <div class="form-group">
            <input type="hidden" name="course_id" class="form-control" id="course_id" value="{{$id}}" required>
        </div>


        <!-- Course Duration -->
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" class="form-control" id="course_name" value="{{$id->course_name}}" required>
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" name="course_duration" class="form-control" id="course_duration" value="{{$id->course_duration}}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
</div>
</div>
</div>
</div>
@endsection
