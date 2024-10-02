@extends('frontend.app')
@section('subNavbar')
        <!--// SubHeader //-->
        <div class="ritekhana-subheader-view1">
            <span class="ritekhana-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Student Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader //-->
@endsection
@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        
        section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #ee7560;
            margin-bottom: 15px;
        }
        a {
            color: #ee7560;
            text-decoration: none;
            transition: color 0.3s;
        }
        a:hover {
            color: #d65b4c;
        }
        footer {
            background-color: #ee7560;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: 20px;
            border-radius: 8px;
        }
        nav a {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="ritekhana-column-9 ritekhana-right-padd ritekhana-left-padd">

        <!--// DashBoard Content //-->
        <div class="ritekhana-dashboard-box">
<header>
    <h1>Welcome to Harvard Student Portal</h1>
    <p>Your Gateway to Campus Life</p>
</header>

<section>
    <h2>Important Announcements</h2>
    <ul>
        <li><strong>Fall Semester Begins:</strong> September 1, 2024</li>
        <li><strong>Registration Deadline:</strong> August 15, 2024</li>
        <li><strong>Financial Aid Applications:</strong> Due by July 30, 2024</li>
    </ul>
</section>

<section>
    <h2>Quick Links</h2>
    <nav>
        <a href="#">Course Catalog</a>
        <a href="#">Academic Calendar</a>
        <a href="#">Library Resources</a>
        <a href="#">Campus Services</a>
        <a href="#">Student Organizations</a>
        <a href="#">IT Support</a>
    </nav>
</section>

<section>
    <h2>Campus Resources</h2>
    <ul>
        <li><strong>Academic Advising:</strong> Get guidance on course selection and academic planning. <a href="#">Learn More</a></li>
        <li><strong>Counseling Services:</strong> Access mental health support and resources. <a href="#">Learn More</a></li>
        <li><strong>Career Services:</strong> Explore internships, job opportunities, and resume workshops. <a href="#">Learn More</a></li>
    </ul>
</section>

<section>
    <h2>Events & Activities</h2>
    <ul>
        <li><strong>Welcome Week:</strong> Join us for a series of events to kick off the semester! August 28 - September 3, 2024</li>
        <li><strong>Career Fair:</strong> Connect with employers on September 15, 2024. <a href="#">Register Now</a></li>
        <li><strong>Student Club Expo:</strong> Discover clubs and organizations on September 10, 2024. <a href="#">More Info</a></li>
    </ul>
</section>

<section>
    <h2>FAQs</h2>
    <ul>
        <li><strong>How do I reset my password?</strong> Visit the IT Support section for assistance.</li>
        <li><strong>Where can I find my class schedule?</strong> Check the Course Catalog under Quick Links.</li>
    </ul>
</section>

</section>
</div>
</div>
</body>

@endsection