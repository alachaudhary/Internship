<!-- create.blade.php -->

@extends('backend.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    <h2>Create New Course</h2>


    <!-- Form to create a new course -->
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <!-- Course Name -->
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" class="form-control" id="course_name" required>
        </div>


        <!-- Course Duration -->
        <div class="form-group">
            <label for="course_duration">Course Duration (in months)</label>
            <input type="number" name="course_duration" class="form-control" id="course_duration" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Course</button>
    </form>
</div>
</div>
</div>
</div>
@endsection
