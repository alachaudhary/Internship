<!-- create.blade.php -->

@extends('backend.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    <h2>Edit Section</h2>


    <!-- Form to create a new course -->
    <form action="{{ route('sections.update',$id->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Course Name -->
        <div class="form-group">
            <input type="hidden" name="course_id" class="form-control" id="course_id" value="{{$id}}" required>
        </div>


        <!-- Course Duration -->
        <div class="form-group">
            <label for="teacher_id">Teacher ID</label>
            <input type="text" name="teacher_id" class="form-control" id="teacher_id" value="{{$id->teacher_id}}" required>
        </div>
        <div class="form-group">
            <label for="section_capacity">Section Capacity</label>
            <input type="text" name="section_capacity" class="form-control" id="section_capacity" value="{{$id->section_capacity}}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Section</button>
    </form>
</div>
</div>
</div>
</div>
@endsection
