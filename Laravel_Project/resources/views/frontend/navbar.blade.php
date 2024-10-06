        <!--// Header //-->
        <header id="ritekhana-header" class="ritekhana-header-one">
            
            <div class="col-md-12">
                <a href="index.html" class="ritekhana-logo"><img src="{{asset('images/logo1.png')}}" alt=""></a>
                <div class="ritekhana-navigation">
                    <span class="ritekhana-menu-link">
                        <span class="menu-bar"></span>
                        <span class="menu-bar"></span>
                        <span class="menu-bar"></span>
                    </span>
                    <nav id="main-nav">
                        <ul id="main-menu" class="sm sm-blue">
                            <li class="active"><a href="{{route('user.index')}}">Home</a></li>
                            <li><a href="#">Blogs</a>
                                <ul>
                                    <li><a href="blog-large.html">Blog Large</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li class="megamenu-wrap"><a href="{{route('news.index')}}">News</a>
                            </li>
                            <li><a href="#">Pages</a>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <form method="post" action="{{route('logout')}}" style="display: inline;">
                    @csrf
                    <button class="ritekhana-header-btn">
                    Logout
                    </button>
                </form>
            </div>
            
        </header>
        <!--// Header //-->