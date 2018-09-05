@extends('layouts.base')


@section('content')
<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-sm-12">

                    <ul class="breadcrumb">

                        <li><a href="index.html">Home</a>
                        </li>
                        
                        <li>Contact</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
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
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->

                    
                </div> 
                <div class="col-md-9">


                    <div class="box" id="contact">
                        <h1>Contact</h1>

                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>Balkumari
                                    <br>Ring Road
                                    <br>Lalitpur
                                    <br>
                                    <strong>Nepal</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call Us</h3>
                                <p class="text-muted">This number is toll free if calling from Nepal otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>01-5201241</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us.</p>
                                <ul>
                                    <li><strong><a href="mailto:">info@hastakala.com</a></strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        

                       

                        


                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
        </div>
</div>

@endsection
