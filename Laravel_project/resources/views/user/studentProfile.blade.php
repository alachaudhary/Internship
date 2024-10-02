@extends('frontend.app')

@section('subNavbar')
        <!--// SubHeader //-->
        <div class="ritekhana-subheader-view1">
            <span class="ritekhana-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Personal Information</h1>
                    </div>
                    <ul class="ritekhana-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Personal Information</a></li>
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
        <h1 style="text-align: center;">Student Personal Details</h1>
        
        <div style="text-align: center; margin-bottom: 20px;">
           
            @if($student->image)
                <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" style="width: 150px; height: auto; border-radius: 10px;">
            @else
                <p>No image available.</p>
            @endif
        </div>

        <table border="1" cellpadding="10" cellspacing="0" width="50%" align="center">
            <tr>
                <th colspan="2" style="text-align: center;">Student Information</th>
            </tr>
            <tr>
                <td><strong>Student ID:</strong> {{ $student->id }}</td>
            </tr>
            <tr>
                <td><strong>Name:</strong> {{ $student->name }}</td>
            </tr>
            <tr>
                <td><strong>Father Name:</strong> {{ $student->father_name }}</td>
            </tr>
            <tr>
                <td><strong>Gender:</strong> {{ $student->gender }}</td>
            </tr>
            <tr>
                <td><strong>Age:</strong> {{ $student->age }}</td>
            </tr>
            <tr>
                <td><strong>Program:</strong> {{ $student->program }}</td>
            </tr>
            <tr>
                <td><strong>Email:</strong> {{ $student->email }}</td>
            </tr>
            <tr>
                <td><strong>Phone:</strong> {{ $student->phone }}</td>
            </tr>
            <tr>
                <td><strong>Address:</strong> {{ $student->address }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection
