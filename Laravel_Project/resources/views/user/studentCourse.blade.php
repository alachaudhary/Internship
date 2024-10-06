
@extends('frontend.app')
@section('subNavbar')
        <!--// SubHeader //-->
        <div class="ritekhana-subheader-view1">
            <span class="ritekhana-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Registered Courses</h1>
                    </div>
                    <ul class="ritekhana-breadcrumb">
                        <li><a href="{{route('user.index')}}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Registered Courses</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// SubHeader //-->
@endsection

@section('content')
<div class="ritekhana-column-9 ritekhana-right-padd ritekhana-left-padd">

<!--// DashBoard Content //-->
<div class="ritekhana-dashboard-box">
    <h1 style="text-align: center;">Courses Detail</h1>
      <table class="table table-bordered">
      <thead class="thead-dark" >
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Duration</th>
        <th>Section ID</th>
        <th>Resource Person ID</th>
      </tr>
    </thead>
    <tbody>
           @foreach($st->sections as $section)
            <tr>
            <td>{{$section->course->id}}</td>
            <td>{{$section->course->course_name}}</td>
            <td>{{$section->course->course_duration}}</td>
            <td>{{$section->id}}</td>
            <td>{{$section->teacher_id}}</td>
            </tr>
            @endforeach
      
    </tbody>
  </table>
</div>
</div>
</div>
@endsection