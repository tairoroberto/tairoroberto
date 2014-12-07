    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  (11) 95297-9157</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/tairoberto" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/tairoroberto" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/profile/view?id=266977400&trk=nav_responsive_tab_profile" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="http://www.skype.com/en/tairororberto" target="_blank"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{action('HomeController@home')}}"><img src="packages/images/logo.png" alt="logo" width="152" height="72"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{action('HomeController@home')}}">Home</a></li>
                   {{--     <li><a href="{{action('HomeController@aboutUs')}}">About Us</a></li>
                        <li><a href="{{action('HomeController@services')}}">Services</a></li>
                        <li><a href="{{action('HomeController@portifolio')}}">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{action('HomeController@blogSingle')}}">Blog Single</a></li>
                                <li><a href="{{action('HomeController@pricing')}}">Pricing</a></li>
                                <li><a href="{{action('HomeController@errorPag')}}">404</a></li>
                                <li><a href="{{action('HomeController@shortCodes')}}">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="{{action('HomeController@blog')}}">Blog</a></li> 

                        --}}
                        <li><a href="{{action('HomeController@contact')}}">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->