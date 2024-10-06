<!doctype html>
<html lang="zxx">


<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Student Portal</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/smartmenus.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugin.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>

<body>

    <div class="ritekhana-wrapper">


@include('frontend.navbar')
@yield('subNavbar')
<div class="ritekhana-main-content">

<!--// Main Section //-->
<div class="ritekhana-main-section">
    <div class="container">
        <div class="ritekhana-row">
<div class="ritekhana-column-3 ritekhana-right-padd">
                            <div class="ritekhana-dashboard-nav">
                                <ul>
                                    <li class="active"><a href="{{route('user.index')}}"><i class="fab fa-delicious"></i> Dashboard</a></li>
                                    <li><a href="{{route('studentinfo')}}"><i class="fa fa-user"></i> My Profile</a></li>
                                    <li><a href="{{route('studentcourse')}}"><i class="fa fa-book-reader"></i> Registered Courses</a></li>
                                    <li><a href="#"><i class="far fa-sun"></i> Account Setting</a></li>
                                    <li><a href="#"><i class="fa fa-lock-open"></i> Change Password</a></li>
                                    <li><a href="{{route('news.index')}}"><i class="fa fa-book"></i> News</a></li>
                                    <li>  <form method="post" action="{{route('logout')}}" style="display: inline;">
                                        @csrf
                                        <button style="background: none; border: none; color: inherit; padding: 12px 1px; text-align: left; cursor: pointer; display: flex; align-items: center;">
                                            <i class="fa fa-sign-out-alt" style="margin-right: 8px;"></i> Logout
                                        </button>
                                    </form></li>
                                </ul>
                            </div>
                        </div>
@yield('content')
</div>
</div>
</div>
</div>
        <!--// Footer //-->
@include('frontend.footer')
        <!--// Footer //-->

    </div>


    <!-- jQuery -->
    <script src="{{asset('script/jquery.js')}}"></script>
    <script src="{{asset('script/popper.min.js')}}"></script>
    <script src="{{asset('script/bootstrap.min.js')}}"></script>
    <script src="{{asset('script/slick.slider.min.js')}}"></script>
    <script src="{{asset('script/fancybox.min.js')}}"></script>
    <script src="{{asset('script/isotope.min.js')}}"></script>
    <script src="{{asset('script/smartmenus.min.js')}}"></script>
    <script src="{{asset('script/progressbar.js')}}"></script>
    <script src="{{asset('script/selectize.min.js')}}"></script>
    <script src="{{asset('script/functions.js')}}"></script>
</body>


</html>