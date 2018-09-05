<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Hastakala
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="/css/style.brown.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="/css/custom.css" rel="stylesheet">

    <script src="/js/respond.min.js"></script>

    <link rel="shortcut icon" href="/img/favicon.png">
    <style>
        body  {
            background-image: url("img/back.jpg");
           
        }
        .user-image {
            float: left;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin-right: 10px;
            margin-top: -2px;
        }
        .dropdown-menu {
            position: absolute;
            right: 0;
            left: auto;
        }
    </style>


</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Hi!!</a>  <a href="#">Welcome!!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                                     
                        <li class="dropdown user user-menu">
                            <a href="#" data-toggle="modal" data-target="#user-modal">
                              <img src="/img/img1.jpg" class="user-image" alt="User Image">
                              <span class="hidden-xs">Christopher</span>
                            </a>
                            
                        </li>
                          <!-- Control Sidebar Toggle Button -->    
                    
                </ul>
            </div>
        </div>
        <div class="modal fade" id="user-modal" tabindex="-1" role="dialog" aria-labelledby="User" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="User">User</h4>
                    </div>
                    <div class="modal-body">
                            <p class="text-center">
                                <a href="/">
                                <button class="btn btn-primary"><i class="fa fa-sign-out"></i> Log out</button>
                                </a>
                            </p>
                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-heart-o"></i> Go to Profile</button>
                            </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="/" data-animate-hover="bounce">
                    <img src="/img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Hastakala - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>-->
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li> <a href="/"  data-hover="dropdown" data-delay="200">Home</a>
                    </li>

                   <!-- <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Men <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="/categories">T-shirts</a>
                                                </li>
                                                <li><a href="/categories">Shirts</a>
                                                </li>
                                                <li><a href="/categories">Pants</a>
                                                </li>
                                                <li><a href="/categories">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="/categories">Trainers</a>
                                                </li>
                                                <li><a href="/categories">Sandals</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                                <li><a href="/categories">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="/categories">Trainers</a>
                                                </li>
                                                <li><a href="/categories">Sandals</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                                <li><a href="/categories">Casual</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                                <li><a href="/categories">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Featured</h5>
                                            <ul>
                                                <li><a href="/categories">Trainers</a>
                                                </li>
                                                <li><a href="/categories">Sandals</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="/categories">Trainers</a>
                                                </li>
                                                <li><a href="/categories">Sandals</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               
                            </li>
                        </ul>
                    </li>-->
            		<li><a href="/product"  data-hover="dropdown" data-delay="200">Products</a>
                    </li>
            		<li><a href="/training"  data-hover="dropdown" data-delay="200">training</a>
                    </li>
			<li><a href="/contact"  data-hover="dropdown" data-delay="200">Contact</a>
                    </li>
		    </li>
			<li><a href="/about"  data-hover="dropdown" data-delay="200">About Us</a>
                    </li>

                    <!--<li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="/categories">T-shirts</a>
                                                </li>
                                                <li><a href="/categories">Shirts</a>
                                                </li>
                                                <li><a href="/categories">Pants</a>
                                                </li>
                                                <li><a href="/categories">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="/categories">Trainers</a>
                                                </li>
                                                <li><a href="/categories">Sandals</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                                <li><a href="/categories">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="/categories">Trainers</a>
                                                </li>
                                                <li><a href="/categories">Sandals</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                                <li><a href="/categories">Casual</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                                <li><a href="/categories">Casual</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="/categories">Trainers</a>
                                                </li>
                                                <li><a href="/categories">Sandals</a>
                                                </li>
                                                <li><a href="/categories">Hiking shoes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            <!--</li>
                        </ul>
                    </li>
            <li><a href="/blog"  data-hover="dropdown" data-delay="200">Blog</a>
                    </li>-->

                    <!--<li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Blah <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="/">Homepage</a>
                                                </li>
                                                <li><a href="/categories">Category - sidebar left</a>
                                                </li>
                                                <li><a href="category-right.html">Category - sidebar right</a>
                                                </li>
                                                <li><a href="category-full.html">Category - full width</a>
                                                </li>
                                                <li><a href="/product">Product detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="/register">Register / login</a>
                                                </li>
                                                <li><a href="customer-orders.html">Orders history</a>
                                                </li>
                                                <li><a href="customer-order.html">Order history detail</a>
                                                </li>
                                                <li><a href="customer-wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="customer-account.html">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="/basket">Shopping cart</a>
                                                </li>
                                                <li><a href="/checkout1">Checkout - step 1</a>
                                                </li>
                                                <li><a href="checkout2.html">Checkout - step 2</a>
                                                </li>
                                                <li><a href="/checkout3">Checkout - step 3</a>
                                                </li>
                                                <li><a href="checkout4.html">Checkout - step 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="blog.html">Blog listing</a>
                                                </li>
                                                <li><a href="post.html">Blog Post</a>
                                                </li>
                                                <li><a href="faq.html">FAQ</a>
                                                </li>
                                                <li><a href="text.html">Text page</a>
                                                </li>
                                                <li><a href="text-right.html">Text page - right sidebar</a>
                                                </li>
                                                <li><a href="404.html">404 page</a>
                                                </li>
                                                <li><a href="/contact">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                        </ul>
                    </li>-->
                </ul>

            </div>
            <!--/.nav-collapse -->

        <!--

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="/basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <!--<div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>-->

           <!-- </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
       
      
<div id="all">

        <div id="content">
            <div class="container">

                

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Welcome</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="/about">About us</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/blog">Blog</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!--<div class="panel panel-default sidebar-menu">

                     
                    </div>

                    <div class="panel panel-default sidebar-menu">

                       
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>
                @yield('contents')
               
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
      
     </div>
    <!-- /container -->
</div>
    <!-- /container -->
        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="/artist">About us</a>
                            </li>
                            
                            <li><a href="/contact">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Men</h5>

                        <ul>
                            <li><a href="/categories">T-shirts</a>
                            </li>
                            <li><a href="/categories">Shirts</a>
                            </li>
                            <li><a href="/categories">Accessories</a>
                            </li>
                        </ul>

                        <h5>Ladies</h5>
                        <ul>
                            <li><a href="/categories">T-shirts</a>
                            </li>
                            <li><a href="/categories">Skirts</a>
                            </li>
                            <li><a href="/categories">Pants</a>
                            </li>
                            <li><a href="/categories">Accessories</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Avids Ltd.</strong>
                            <br>Balkumari
                            
                            <br>Ring Road
                            <br>Lalitpur
                            <br>
                            <strong>Nepal</strong>
                        </p>


                        <a href="/contact">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 Avids</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious</a> & <a href="https://fity.cz">Fity</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/bootstrap-hover-dropdown.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/front.js"></script>

</body>

</html>
