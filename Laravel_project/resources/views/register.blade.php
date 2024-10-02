@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

    <h2>Add Student to Section: {{ $section->name }}</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('sections.addStudent', $section->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="student_id">Select Student</label>
            <select name="student_id" id="student_id" class="form-control" required>
                <option value="">-- Choose a Student --</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
</div>
</div>
</div>
@endsection
